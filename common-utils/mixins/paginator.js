import { PAGE_SIZES } from '~/constants'

const Paginator = {
  data () {
    return {
      page: 1,
      limit: PAGE_SIZES[0]
    }
  },

  computed: {
    /**
     * Get pagination query
     *
     * @param {Object} Pagination query
     */
    paginationQuery () {
      if (!this.page || !PAGE_SIZES.includes(this.limit)) {
        return {
          page: 1,
          limit: PAGE_SIZES[0]
        }
      }

      return {
        page: this.page,
        limit: this.limit
      }
    }
  },

  created () {
    this.getPaginationParamsFromRoute()
  },

  methods: {
    /**
     * Get params from route
     * Set pagination when url has pagination param
     */
    getPaginationParamsFromRoute () {
      this.setPageAndLimit(+this.$route.query.page, +this.$route.query.limit)
    },

    /**
     * Get page, set limit
     *
     * @param {Number} page - Page number
     * @param {Number} limit - Limit number
     */
    getPageAndLimit (page, limit) {
      let pageVal = 0
      let limitVal = 0

      if (page && PAGE_SIZES.includes(limit)) {
        pageVal = page
        limitVal = limit
      } else if (page && !PAGE_SIZES.includes(limit)) {
        pageVal = page
        limitVal = PAGE_SIZES[0]
      } else if (!page && PAGE_SIZES.includes(limit)) {
        pageVal = 1
        limitVal = limit
      } else {
        pageVal = 1
        limitVal = PAGE_SIZES[0]
      }

      return { pageVal, limitVal }
    },

    /**
     * Set page, set limit
     *
     * @param {Number} page - Page number
     * @param {Number} limit - Limit number
     */
    setPageAndLimit (page, limit) {
      const { pageVal, limitVal } = this.getPageAndLimit(page, limit)

      this.page = pageVal
      this.limit = limitVal

      this.setPaginationQueryToUrl()
    },

    /**
     * Set pagination query to Url
     */
    setPaginationQueryToUrl () {
      const { pageVal, limitVal } = this.getPageAndLimit(
        this.paginationQuery.page,
        this.paginationQuery.limit
      )

      const newRouteQuery = {
        ...this.$route.query,
        page: pageVal.toString(),
        limit: limitVal.toString()
      }

      if (JSON.stringify(newRouteQuery) !== JSON.stringify(this.$route.query)) {
        this.$router.replace({ query: newRouteQuery }).catch((err) => {
          console.log(err)
        })
      }
    }
  }
}

export default Paginator
