let fs = require('fs')
let path = require('path')
fs.writeFile('newFile.txt','gooooo',function(err){
if(err) console.log(err)
})
