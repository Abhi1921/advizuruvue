import { debounce } from 'lodash'

const Layout = {
  data () {
    return {
      isPC: false
    }
  },

  mounted () {
    let viewportWidth = Math.max(
      document.documentElement.clientWidth,
      window.innerWidth || 0
    )
    let resizeTimer = 0

    this.isPC = viewportWidth >= 992

    window.addEventListener('resize', () => {
      clearTimeout(resizeTimer)

      resizeTimer = setTimeout(
        debounce(() => {
          viewportWidth = Math.max(
            document.documentElement.clientWidth,
            window.innerWidth || 0
          )
          this.isPC = viewportWidth >= 992
        }),
        250
      )
    })
  }
}

export { Layout }
export default Layout
