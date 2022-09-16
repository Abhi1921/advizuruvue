'use strict'

import Base64 from 'crypto-js/enc-base64'
import Utf8 from 'crypto-js/enc-utf8'

export const CODEC_JSON = 'json'
export const CODEC_BASE64 = 'base64'
export const CODEC_BASE64_URI = 'base64Uri'

const encoder = {
  [CODEC_JSON] (val) {
    return JSON.stringify(val)
  },
  [CODEC_BASE64] (val) {
    return Base64.stringify(Utf8.parse(val))
  },
  [CODEC_BASE64_URI] (val) {
    return Base64.stringify(Utf8.parse(val))
  }
}

const decoder = {
  [CODEC_JSON] (val) {
    return JSON.parse(val)
  },
  [CODEC_BASE64] (val) {
    return Utf8.stringify(Base64.parse(val))
  },
  [CODEC_BASE64_URI] (val) {
    return Utf8.stringify(Base64.parse(val))
  }
}

const CodecUtils = {
  encode (val, options) {
    if (!options || options.constructor !== Array || options.length === 0) {
      return null
    }
    if (!val) {
      return null
    }
    let res = val
    for (const codec of options) {
      if (!(encoder[codec] instanceof Function)) {
        console.log(`Encoder '${codec}' could not be found, will be skipped.`)
        continue
      }
      try {
        res = encoder[codec](res)
      } catch (e) {
        console.log(
          `Failed to encode (codec='${codec}', value='${res}'), will return null.`,
          e
        )
        return null
      }
    }
    return res
  },

  decode (val, options) {
    if (!options || options.constructor !== Array || options.length === 0) {
      return null
    }
    if (!val) {
      return null
    }
    let res = val
    for (const codec of options) {
      if (!(decoder[codec] instanceof Function)) {
        console.log(`Decoder '${codec}' could not be found, will be skipped.`)
        continue
      }
      if (decoder[codec] instanceof Function) {
        try {
          res = decoder[codec](res)
        } catch (e) {
          console.log(
            `Failed to decode (codec='${codec}', value='${res}'), will return null.`,
            e
          )
          return null
        }
      }
    }
    return res
  }
}

export { CodecUtils }
export default CodecUtils
