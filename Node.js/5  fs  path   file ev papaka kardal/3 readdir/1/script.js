let fs = require('fs')
fs.readdir('app',function (err,data) {
   console.log(data)
   data.forEach(function(file){
console.log(file)
   })
  })
