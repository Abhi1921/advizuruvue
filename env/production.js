export default {
  debug: false,

  local: false,

  isEncoderByObfuscator: true,

  apiBaseUrl: 'http://api.advizuru.com/api/v1',

  apiAxios: {
    baseApiURL: 'http://api.advizuru.com/api/v1',
    sessionTokenName: 'ppn-advizuru-',
    retryCount: 3,
    timeout: 300000,
  }
}
