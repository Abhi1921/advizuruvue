const FormatNumber = {

  methods: {

    /**
     * Format Number
     */
    onFormat (number) {
      const result = (number * 1).toLocaleString()
      return result
    }
  }
}

export default FormatNumber
