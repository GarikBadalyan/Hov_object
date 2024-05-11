let fs = require('fs')
fs.readFile('t1.txt','utf-8',function(err,data) {
   console.log(data)
 })
// stex araj 22222222 -er@ ktpi heto nor file-@ kkarda
 let text = fs.readFileSync('t1.txt','utf-8')
console.log(text)
console.log("2222222")
