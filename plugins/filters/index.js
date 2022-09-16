import Vue from 'vue'
import moment from 'moment-timezone'
// import 'moment-timezone'
import { TIMEZONE } from '~/constants'
/**
 * price format
 * @param {Number} num
 * @return {String} formatted number
 */
const price = (num) => {
  return parent.$nuxt.$n(num, 'currency')
}

/**
 * date format
 * @param {Date} date
 * @param {String} format
 * @return {String} formatted date
 */
const date = (date, format = 'YYYY/MM/DD HH:mm:ss') => {
  const dateObj = moment(date).tz(TIMEZONE)
  return dateObj.isValid() ? dateObj.format(format) : ''
}

/**
 * Format date in localization long format
 *
 * @param {Date|Timestamp} date Date value
 */
const localizeDateLong = (date) => {
  const dateObj = moment(date)

  return date && dateObj.isValid() ? parent.$nuxt.$d(date, 'long') : ''
}

/**
 * Format date in localization short format
 *
 * @param {Date|Timestamp} date Date value
 */
const localizeDateShort = (date) => {
  const dateObj = moment(date)

  return date && dateObj.isValid() ? parent.$nuxt.$d(date, 'short') : ''
}

/**
 * Format date
 *
 */
const convertDate = (date) => {
  date = date.toString().substring(4)
  return date.substring(0, 2) + '/' + date.substring(2)
}

/**
 * date format
 * @param {Date} date
 * @param {String} format
 * @return {String} formatted date
 */
const customDate = (date, format = 'M-DD HH:mm') => {
  if (!date) {
    return ''
  }
  const dateObj = moment(date)
  return dateObj.isValid() ? dateObj.format(format) : date
}

/**
 * date format
 * @param {Date} date
 * @param {String} format
 * @return {String} formatted date
 */
const shortDate = (date, format = 'YYYY-MM-DD') => {
  const dateObj = moment(date.toString())
  return dateObj.isValid() ? dateObj.format(format) : ''
}

/**
 * date format
 * @param {Date} date
 * @param {String} format
 * @return {String} formatted date
 */
const timeShort = (date, format = 'MM-DD') => {
  const currentDate = +moment().subtract(0, 'days').startOf('day').format('x')
  const dateObj = +moment(date).subtract(0, 'days').startOf('day').format('x')
  const minisecondInDay = 24 * 3600 * 1000

  if ((currentDate - dateObj) < minisecondInDay) {
    const dateZone = moment(date).tz(TIMEZONE_JAPAN).format('HH:mm')
    return dateZone
  }
  return moment(date.toString()).tz(TIMEZONE_JAPAN).format(format)
}
const filters = {
  price,
  date,
  localizeDateLong,
  localizeDateShort,
  convertDate,
  customDate,
  shortDate,
  timeShort
}

for (const propName of Object.getOwnPropertyNames(filters)) {
  if (filters[propName] instanceof Function) {
    Vue.filter(propName, filters[propName])
  }
}
