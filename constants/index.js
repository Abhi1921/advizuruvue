/**
 * List of number record in one page
 */
export const PAGE_SIZES = [10, 25, 50, 100]

/**
 * Number record in one page
 */
export const PAGE_SIZE = 10

/**
 * Max number record return by api
 */
export const MAX_LIMIT_RECORD = 1000

/**
 * Minisecond
 */
export const MINISECOND = 1000

export const TIMEZONE = 'Asia/Kolkata'

/**
 * Shortcut date picker
 */
export const SHORTCUTS_DATE_PICKER = [
  {
    text: 'short_date_picker.today',
    onClick () {
      const date = new Date()
      // return a Date
      return date
    }
  },
  {
    text: 'short_date_picker.yesterday',
    onClick () {
      const date = new Date()
      date.setTime(date.getTime() - 3600 * 1000 * 24)
      return date
    }
  },
  {
    text: 'short_date_picker.tomorrow',
    onClick () {
      const date = new Date()
      date.setTime(date.getTime() + 3600 * 1000 * 24)
      return date
    }
  }
]