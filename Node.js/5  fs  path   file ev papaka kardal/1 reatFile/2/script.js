let http = require('http')
let url = require('url')
let fs = require('fs')

http.createServer(function(req,res){
   fs.readFile('index.html','utf8',function(err,data){
      res.writeHead(200, {'Content-Type': 'text/html'});
      res.write(data)
      return res.end()
   })
}).listen(3000)
