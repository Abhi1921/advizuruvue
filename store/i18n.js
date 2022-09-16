import _find from 'lodash/find'

/**
 * State
 */
export const state = () => ({
  locales: [
    { value: 'vi-VN', label: 'VN' },
    { value: 'en-US', label: 'EN' },
    { value: 'ja-JP', label: 'JP' }
  ],
  locale: 'en-US'
})

/**
 * Mutations
 */
export const mutations = {
  SET_LOCALE (state, locale) {
    const isLocale = _find(state.locales, { value: locale })
    if (isLocale) {
      state.locale = locale
      this.app.i18n.locale = locale
    }
  }
}

/**
 * Getters
 */
export const getters = {
  getLocale: (state) => {
    return state.locale
  }
}

/**
 * Actions
 */
export const actions = {
  setLocale: ({ commit }, data) => {
    commit('SET_LOCALE', data)
  }
}

export default {
  state,
  mutations,
  getters,
  actions
}
