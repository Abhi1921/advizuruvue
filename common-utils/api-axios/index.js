import ApiAxios from './api-axios'

const options = process.env.default.apiAxios
export default (context, inject) => {
  const apiAxios = new ApiAxios(options, context)
  inject('apiAxios', apiAxios)
}
