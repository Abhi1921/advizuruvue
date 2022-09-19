const environment = process.env.NUXT_ENV_TYPE || 'local'
const baseEnv = require(`./env/${environment}`)
const env = Object.assign({ environment }, baseEnv)

export default {
  env,
  ssr: true,
  // Target: https://go.nuxtjs.dev/config-target
  target: 'static',

  // Global page headers: https://go.nuxtjs.dev/config-head
  head: {
    title: 'Advizuru',
    htmlAttrs: {
      lang: 'en'
    },
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' },
      { name: 'format-detection', content: 'telephone=no' }
    ],
    link: [
      { rel:"stylesheet", type:"text/css", href:'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js' },
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ],
    script: [
      {
        src:
          "https://maps.googleapis.com/maps/api/js?key=AIzaSyBKOdL4WZ-MfAvXUancATwFpwd4xsMUKNw&libraries=places",
          type: "text/javascript"
      },
      {
      src:
      "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js",
      type: "text/javascript"
    },
    ]
  },

  // Global CSS: https://go.nuxtjs.dev/config-css
  css: [
    { src: '~/assets/css/bootstrap.min.css', lang: 'css' },
    { src: '~/assets/css/googleapis.css', lang: 'css' },
    { src: '~/assets/css/ion.rangeSlider.min.css', lang: 'css' },
    { src: '~/assets/css/style.css', lang: 'css' }
  ],

  // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
  plugins: [
    { src: '~/common-utils/api-axios', ssr: true },

    { src: '~/plugins/bootstrap-vue', ssr: true },
    { src: '~/plugins/vue-i18n', ssr: true },
    { src: '~/plugins/vee-validate', ssr: false },
    { src: '~/plugins/vue-toastification', ssr: false },
    { src: '~/plugins/moment', ssr: true },
    { src: '~/plugins/filters', ssr: true },
    { src: '~plugins/vue-js-modal.js', ssr: true },
    
    
  ],

  // Auto import components: https://go.nuxtjs.dev/config-components
  components: true,

  // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
  buildModules: [
    'cookie-universal-nuxt',
    '@nuxtjs/axios'
  ],

  // Modules: https://go.nuxtjs.dev/config-modules
  modules: [
     'bootstrap-vue/nuxt',
    '@nuxtjs/axios',
    '@nuxtjs/component-cache',
    ['@nuxtjs/component-cache', {
      max: 10000,
      maxAge: 1000 * 60 * 60
    }]
  ],

  // Build Configuration: https://go.nuxtjs.dev/config-build
  build: {
    transpile: ['vue-instantsearch', 'instantsearch.js/es'],
    analyze: true
  },
  script: [
    {
      src: "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js",
      type: "text/javascript"
    },
  
      {
        src: "https://apis.google.com/js/platform.js",
        type: "text/javascript"
      },
     
    {
      src:
        "https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js",
      type: "text/javascript"
    },
    {
      src:
        "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js",
      type: "text/javascript"
    },
    {
      src:
        "https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js",
      type: "text/javascript"
    },
    {
      src:
        "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js",
      type: "text/javascript"
    },
    {
      src:
        "~/assets/js/main.js",
      type: "text/javascript"
    }
  ],

  /*
   ** Active router link
   */
   router: {
    linkActiveClass: 'active-link'
  },
  auth: {
    strategies: {
      google: {
        clientId: '341701372051-t0k64d9eopp9hoeq1l10j5h4uka78ih3.apps.googleusercontent.com'
      },
    }
  }
}
