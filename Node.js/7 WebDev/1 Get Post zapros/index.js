//let http = require('http')
import http from 'http'
import url from 'url'
http.createServer(function(req,res){
   console.log("gorcarkvel e")
   console.log(req.method);
   let urlRequest = url.parse(req.url,true);
   //console.log(urlRequest)
   console.log(urlRequest.query.test)
   if(urlRequest.query.test % 2 == 0){
      res.end('even')
   }
   res.end('odd')
}).listen(3000)
