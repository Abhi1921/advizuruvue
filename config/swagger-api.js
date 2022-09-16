/**
 * Rules of define operationId CRUD API
 *
 * Main: GET LIST
 * Rule: get{ModuleName}List
 * Example: 'getUserList'
 *
 * Main: POST
 * Rule: create{module_name}
 * Example: 'createUser'
 *
 * Main: GET DETAIL
 * Rule: get{module_name}
 * Example: 'getUser'
 *
 * Main: PUT
 * Rule: update{module_name}
 * Example: 'updateUser'
 *
 * Main: DELETE
 * Rule: delete{module_name}
 * Example: 'deleteUser'
 */

export const SwaggerApi = {
  paths: {
    '/auth/login': {
      post: {
        operationId: 'loginPost',
        consumes: ['application/json'],
        produces: ['application/json']
      }
    },
    '/auth/signup': {
      post: {
        operationId: 'registerPost',
        consumes: ['application/json'],
        produces: ['application/json']
      }
    },
    '/auth/update/profile': {
      post: {
        operationId: 'profilePost',
        consumes: ['application/json'],
        produces: ['application/json']
      }
    },
      '/auth/update/profileorg': {
        post: {
          operationId: 'orgProfilePost',
          consumes: ['application/json'],
          produces: ['application/json']
        }
      
    },
    '/general/static-master-data': {
      post: {
        operationId: 'staticGeneralData',
        consumes: ['application/json'],
        produces: ['application/json']
      }
    },
    '/general/master-data': {
      post: {
        operationId: 'generalData',
        consumes: ['application/json'],
        produces: ['application/json']
      }
    },
   
  }
}
