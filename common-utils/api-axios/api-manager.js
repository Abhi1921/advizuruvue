'use strict'

import axios from 'axios'
import { cloneDeep } from 'lodash'
import { CodecUtils, CODEC_JSON, CODEC_BASE64 } from '../helpers/codec-utils'

const ENCODE_OPTIONS = [CODEC_JSON, CODEC_BASE64]

const encodeCondition = (condition) => {
  return CodecUtils.encode(condition, ENCODE_OPTIONS)
}

export default class ApiManager {
  /**
   * constructor
   */
  constructor (config) {
    this._config = config
    this._axios = axios.create()
  }

  /**
    * Call api by params
    *
    * @param {*} method
    * @param {*} url
    * @param {*} params
    * @param {*} options
    * @return {Object}
    */
  async callApi (method = 'GET', url, params = null, options = {}) {
    const config = this._buildConfig(method, url, params, options)

    const res = await this._axios.request(config)

    if (options.rawResponse) {
      return res
    } else {
      if (Object.prototype.hasOwnProperty.call(res, 'data')) {
        return res.data
      }
      return res
    }
  }

  /**
    * Build config for api call
    *
    * @param {String} method
    * @param {String} url
    * @param {Object} params
    * @param {Object} options
    * @return {Object}
    */
  _buildConfig (method, url, params, options) {
    const config = {
      timeout: this._config.timeout,
      baseApiURL: this._config.baseApiURL,
      isEncodeCodition: this._config.isEncodeCodition,
      method,
      url: this._config.baseApiURL + url,
      headers: {}
    }
    
    if (options.token) {
      config.headers.Authorization = `Bearer ${options.token}`
    }

    if (/^POST|PUT|PATCH$/i.test(method) && options.file) {
      params = Object.assign(
        {
          _type: 'multipart/form-data'
        },
        params || {}
      )

      const formData = new FormData()
      Object.entries(params).forEach(([key, value]) => {
        if (Array.isArray(value)) {
          value.forEach((item) => {
            formData.append(key + '[]', item)
          })
        } else {
          formData.set(key, value)
        }
      })

      config.headers['Content-Type'] = params._type
      if (config.method.toUpperCase() === 'PUT') {
        config.method = 'POST'
        formData.set('_method', 'PUT')
      }
      config.data = formData
    } else if (/^POST$/i.test(method) && options.rawFile) {
      params = Object.assign(
        {
          _data: null,
          _type: 'application/octet-stream'
        },
        params || {}
      )
      if (!(params._data instanceof FormData)) {
        console.warn(
          'Attempt to upload file, but params["_data"] is not FormData.'
        )
      }
      config.headers['Content-Type'] = params._type
      config.data = params._data
    } else if (/^(POST|PUT|PATCH)$/i.test(method)) {
      config.headers['Content-Type'] = 'application/json'
      config.data = params
    } else if (/^DELETE$/i.test(method) && options.deleteWithRequestBody) {
      config.data = params
    } else {
      config.params = cloneDeep(params)
    }

    if (config.params && config.params.condition) {
      config.params.condition = encodeCondition(config.params.condition)
    }

    if (options.headers) {
      Object.assign(config.headers, options.headers)
    }

    if (options.responseType) {
      config.responseType = options.responseType
    }

    return config
  }

  getAxios () {
    return this._axios
  }
}
