/**
 * Build path name list, for active nav link
 *
 * Example - Before: /parent/child-1/child-2
 * Example - After: ['/parent', '/parent/child-1', '/parent/child-1/child-2']
 */
export const buildPathNameList = (pathName) => {
  if (!pathName) { return [] }

  const pathList = []
  const pathArray = pathName.substr(pathName.indexOf('/') + 1).split('/') // Example: ['parent', 'child-1', 'child-2']

  pathArray.forEach((item, index) => {
    if (!pathList[index - 1]) {
      pathList.push('/' + item)
      return
    }

    pathList.push(pathList[index - 1] + '/' + item)
  })

  return pathList
}
