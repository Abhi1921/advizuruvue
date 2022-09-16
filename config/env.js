const environment = process.env.NODE_ENV || 'local'
const baseEnv = require(`../env/${environment}`)
const env = Object.assign({ environment }, baseEnv)
export default env
