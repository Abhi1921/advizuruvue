/*
 * Copyright 2021 DevFast Limited. All rights reserved.
 * Email: tech@devfast.us .
 */

import Vue from 'vue'
import Toast from 'vue-toastification'
import 'vue-toastification/dist/index.css'

const options = {
  position: 'top-right',
  timeout: 2000,
  closeOnClick: true,
  pauseOnFocusLoss: true,
  pauseOnHover: true,
  draggable: true,
  draggablePercent: 0.6,
  hideCloseButton: true,
  hideProgressBar: false,
  icon: true
}

export default () => {
  Vue.use(Toast, options)
}
