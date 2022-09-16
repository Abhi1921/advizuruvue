import Vue from 'vue'
import VueI18n from 'vue-i18n'

Vue.use(VueI18n)

export default ({ app, store }) => {
  // Define localization format for datetime
  const dateTimeFormats = {
    'en-US': {
      short: {
        year: 'numeric', month: 'short', day: 'numeric'
      },
      long: {
        year: 'numeric',
        month: 'short',
        day: 'numeric',
        weekday: 'short',
        hour: 'numeric',
        minute: 'numeric'
      },
      medium: {
        year: 'numeric',
        month: '2-digit',
        day: '2-digit',
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',
        hour12: false
      }
    },
    'ja-JP': {
      short: {
        year: 'numeric', month: 'short', day: 'numeric'
      },
      long: {
        year: 'numeric',
        month: 'short',
        day: 'numeric',
        weekday: 'short',
        hour: 'numeric',
        minute: 'numeric',
        hour12: true
      },
      medium: {
        year: 'numeric',
        month: '2-digit',
        day: '2-digit',
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',
        hour12: false
      }
    },
    'vi-VN': {
      short: {
        year: 'numeric', month: 'short', day: 'numeric'
      },
      long: {
        year: 'numeric',
        month: 'short',
        day: 'numeric',
        weekday: 'short',
        hour: 'numeric',
        minute: 'numeric'
      },
      medium: {
        year: 'numeric',
        month: '2-digit',
        day: '2-digit',
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',
        hour12: false
      }
    }
  }

  // Define localization format for number, currency
  const numberFormats = {
    'en-US': {
      currency: {
        style: 'currency', currency: 'USD'
      }
    },
    'ja-JP': {
      currency: {
        style: 'currency', currency: 'JPY', currencyDisplay: 'symbol'
      }
    },
    'vi-VN': {
      currency: {
        style: 'currency', currency: 'VND'
      }
    }
  }

  // Set i18n instance on app
  // This way we can use it in middleware and pages asyncData/fetch
  app.i18n = new VueI18n({
    locale: store.state.i18n.locale,
    fallbackLocale: 'en-US',
    messages: {
      'en-US': require('~/locales/en-US.json'),
      'ja-JP': require('~/locales/ja-JP.json'),
      'vi-VN': require('~/locales/vi-VN.json')
    },
    dateTimeFormats,
    numberFormats,
    silentTranslationWarn: true
  })
}
