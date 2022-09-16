/*
 * Copyright 2021 DevFast Limited. All rights reserved.
 * Email: tech@devfast.us .
 */

import Vue from 'vue'

import moment from 'moment'

Vue.use({
  install (Vue) {
    Vue.prototype.$moment = moment
  }
})

export default ({ app }) => {
  app.$moment = moment
}
