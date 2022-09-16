export default ({ store, redirect, app }) => {
  app.$cheetahAxios.setType('')

  const authToken = app.$cookies.get(app.$cheetahAxios.getCookieTokenName())

  if (!authToken) {
    return redirect('/login')
  }

  // Update cookies
  app.$cheetahAxios.setAuthToken(authToken)

}
