// Config for java script obfuscator
import JavaScriptObfuscator from webpack-obfuscator

/**
 * Create new list object for java script obfuscator.
 *
 * @param {Object} env - Enveronment setting.
 * @returns {Array}  array that contains JavaScriptObfuscator.
 */
const obfuscator = function (env) {
  // If don't apply obfuscator, return array empty
  if (!env.isEncoderByObfuscator) {
    return []
  }

  // For local environment
  if (env.environment === 'local') {
    return [
      new JavaScriptObfuscator({
        log: false,
        debugProtection: true,
        debugProtectionInterval: true,
        disableConsoleOutput: true
        // domainLock: [env.siteDomain]
      })
    ]
  }

  // For preview environment
  if (env.environment === 'dev') {
    return [
      new JavaScriptObfuscator({
        log: false,
        debugProtection: true,
        debugProtectionInterval: true,
        disableConsoleOutput: true
        // domainLock: [env.siteDomain]
      })
    ]
  }

  if (env.environment === 'staging') {
    return [
      new JavaScriptObfuscator({
        log: false,
        debugProtection: true,
        debugProtectionInterval: true,
        disableConsoleOutput: true
        // domainLock: [env.siteDomain]
      })
    ]
  }

  // For production environment
  if (env.environment === 'production') {
    return [
      new JavaScriptObfuscator({
        log: false,
        debugProtection: true,
        debugProtectionInterval: true,
        disableConsoleOutput: true
        // domainLock: [env.siteDomain]
      })
    ]
  }

  return []
}

export default obfuscator
