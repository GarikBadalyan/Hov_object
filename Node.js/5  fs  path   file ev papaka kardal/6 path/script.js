let path = require('path')
console.log(path.basename(__filename))
console.log(path.resolve('./index'))
console.log(path.extname(__filename))
let file = '004_Path_2.js'
let filePath =path.join(__dirname,file)
console.log(filePath)
let pathParts = path.parse(filePath)
console.log(pathParts)
console.log(path.sep)
let objFormat = {
   root: 'C:\\',
  dir: 'C:\\Users\\DELL\\Desktop\\node',
  base: '004_Path_2.js',
  ext: '.js',
  name: '004_Path_2'
}
let obj = path.format(objFormat)
console.log(obj)
