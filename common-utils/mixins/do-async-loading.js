const MIN_LOADING_TIME = 300

const currentTime = () => {
  return new Date().getMilliseconds()
}

const AsyncLoading = {
  data () {
    return {
      loading: false
    }
  },

  methods: {
    doAsync (asyncFunc, ...args) {
      if (this.loading) { return }

      this.loading = true

      const startTime = currentTime()

      return asyncFunc(...args)
        .then((...resolveArgs) => {
          const wait = MIN_LOADING_TIME - (currentTime() - startTime)

          return new Promise((resolve) => {
            setTimeout(
              () => {
                this.loading = false
                resolve(...resolveArgs)
              },
              wait > 0 ? wait : 0
            )
          })
        })
        .catch((...rejectArgs) => {
          const wait = MIN_LOADING_TIME - (currentTime() - startTime)

          return new Promise((resolve, reject) => {
            setTimeout(
              () => {
                this.loading = false
                reject(rejectArgs)
              },
              wait > 0 ? wait : 0
            )
          })
        })
    }
  }
}

export default AsyncLoading
