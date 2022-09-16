
import {
  SHORTCUTS_DATE_PICKER
} from '~/constants'

const EVENT_MODIFY = 'modify'

const Common = {
  computed: {
    /**
     * Get shortcut vue2 date picker
     *
     * @return {Array} SHORTCUTS_DATE_PICKER
     */
    shortcuts () {
      return SHORTCUTS_DATE_PICKER.map((item) => {
        return {
          text: this.$t(item.text),
          onClick: item.onClick
        }
      })
    }
  },

  methods: {
    /**
     * On action
     *
     * @param {String} action - Action API
     * @param {Object} data - Params API
     * @param {String} actionName - Action name
     */
    async onAction (action, data, actionName) {
      if (!(action && data && actionName)) { return }

      this.loading = true

      try {
        await this.$apiAxios[action](data)

        this.$toast.success(
          this.$t('messages.information.action', { name: actionName })
        )

        this.$emit(EVENT_MODIFY)
      } catch (err) {
        console.error(err)
        const message = err?.response?.data?.messages || ''

        if (message) {
          this.$toast.error(message)
        } else {
          this.$toast.error(
            this.$t('messages.error.failed_to_action', { name: actionName })
          )
        }
      } finally {
        this.loading = false
      }
    },


    onError(thisPaste, error){
      if ('message' in error.response.data) {
        thisPaste.$toast.error(error.response.data.message)
        thisPaste.serverErrorMessage = error.response.data.message
        setTimeout(() => thisPaste.serverErrorMessage = false, 3000);
      }

      if('error' in error.response.data)
      thisPaste.$refs.registerForm.setErrors(error.response.data.error);
    }
  }
}

export default Common
