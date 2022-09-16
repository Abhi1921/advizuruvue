const FocusToFirstInvalidFeild = {
  methods: {
    /**
     * Get offset top
     *
     * @param {Object} Element
     * @return {Object} Element
     */
    getOffsetTop (element) {
      if (!element) { return 0 }

      let offsetTop = 0

      while (element) {
        offsetTop += element.offsetTop
        element = element.offsetParent
      }

      return offsetTop
    },

    /**
     * Scroll and focus to the first feild if this feild fails validation
     */
    onFocusToFirstInvalidFeild () {
      const invalidFeedbackElements = document.querySelectorAll('[data-error-text]')

      for (let i = 0; i < invalidFeedbackElements.length; i++) {
        if (invalidFeedbackElements[i].getAttribute('data-error-text')) {
          document.documentElement.scrollTop = this.getOffsetTop(invalidFeedbackElements[i]) - 100
          invalidFeedbackElements[i].querySelector('.form-control').focus()

          break
        }
      }
    }
  }
}

export default FocusToFirstInvalidFeild
