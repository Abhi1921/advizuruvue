'use strict'

import ApiManager from './api-manager'
import { SwaggerApi } from '~/config/swagger-api'

export default class ApiAxios {
  /**
   * Init
   * @param {Object} config
   */
  constructor (config, context) {
    this._config = {
      baseApiURL: '',
      isEncodeCodition: false,
      sessionTokenName: 'ppn-advizuru-',
      retryCount: 3,
      timeout: 30000
    }

    this.type = ''
    this._init = false
    this.context = context
    Object.assign(this._config, config)

    this._apiManager = new ApiManager(this._config)
    this._loadOperationApi()
  }

  async signIn (params) { }

  async signOut (params) { }

  async verifySession (params) { }

  /**
   * SwaggerApi
   */
  _loadOperationApi () {
    if (this._init) {
      return
    }
    this._init = true

    Object.keys(SwaggerApi.paths).forEach((name) => {
      Object.keys(SwaggerApi.paths[name]).forEach((method) => {
        const api = SwaggerApi.paths[name][method]

        this[api.operationId] = async (params, option = null) => {
          const options = Object.assign({
            file: this._isMultipart(api.consumes),
            rawFile: this._isOctetStream(api.consumes),
            token: null,
            guestToken: null,
            guestOrder: null
          }, option)

          if (this._isArrayBuffer(api.produces)) {
            options.responseType = 'arraybuffer'
          }

          let url = name
          const pathVars = url.match(/{(.+?)}/g)

          if (pathVars) {
            pathVars.forEach((pathVar) => {
              const prop = pathVar.replace(/{|}/g, '')

              if (!Object.prototype.hasOwnProperty.call(params, prop)) {
                throw new Error(`Missing required parameters: '${prop}'`)
              }

              url = url.replace(pathVar, params[prop])

              if (!/(post|put)/i.test(method)) {
                delete params[prop]
              }
            })
          }

          let retry = 0

          while (true) {
            try {
              options.token = this.getAuthToken()

              return await this._apiManager.callApi(method, url, params, options)
            } catch (error) {
              // const status = get(error, 'response.status', 500)
              // TODO handle unauthorization in component
              // if (status === 401) {
              //   this.context.app.$cookies.remove('token')
              //   if (this.$router.currentRoute === '/management/login') {
              //     this.context.app.router.push('/management/login')
              //   }
              //   this.context.app.router.push('/login')
              // }

              if (
                method === 'GET' &&
                // retry < CONFIG.DEFAULT_apiManager_GET_RETRY_COUNT
                retry < this._config.retryCount
              ) {
                retry++
                continue
              }

              throw error
            }
          }
        }
      })
    })
  }

  _isOctetStream (consumes) {
    if (!consumes) {
      return false
    }
    return consumes.includes('application/octet-stream')
  }

  _isMultipart (consumes) {
    if (!consumes) {
      return false
    }
    return consumes.includes('multipart/form-data')
  }

  _isArrayBuffer (produces) {
    if (!produces) {
      return false
    }
    return produces.some((produce) => {
      const targets = ['text/csv', 'application/pdf']
      return targets.includes(produce)
    })
  }

  setAuthToken (session) {
    this.context.app.$cookies.set(this.getCookieTokenName(), session, {
      maxAge: 60 * 60 * 24 * 7,
      path: '/'
    })
  }

  getAuthToken () {
    return this.context.app.$cookies.get(this.getCookieTokenName())
  }

  /**
   * Delete token from cookie
   */
  clearAuthToken () {
    this.context.app.$cookies.remove(this.getCookieTokenName())
  }

  setType (type) {
    this.type = type
  }

  getCookieTokenName () {
    // return CONFIG.LS_KEY_SESSION_TOKEN + this.type
    return this._config.sessionTokenName + this.type
  }

  getApiManager () {
    return this._apiManager
  }

  getAxios () {
    return this._apiManager.getAxios()
  }
}
