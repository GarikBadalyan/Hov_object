let fs = require('fs')
let path = require('path')
fs.readdir('app',function (err,data) {
   console.log(data)
   data.forEach(function(file){
console.log(file)
console.log(path.extname(file))
   })
  })
