const LocalStorage = {
  methods: {
    /*
    * Set the value of the specified local storage item
    */
    setLocalStorage (keyname, value) {
      localStorage.setItem(keyname, value)
    },

    /*
     * Get the value of the specified local storage item
     */
    getLocalStorage (keyname) {
      return localStorage.getItem(keyname)
    },
    /*
    *the the specified local storage item
    */
    removeLocalStorage (keyname) {
      localStorage.removeItem(keyname)
    },

    /*
     * Remove all local storage items
     */
    clearLocalStorage () {
      localStorage.clear()
    }
  }
}
export default LocalStorage
