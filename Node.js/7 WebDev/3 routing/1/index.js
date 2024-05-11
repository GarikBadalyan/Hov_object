import http from 'http'
import url from 'url'
//const http = require('http')
//const url = require('url')
http.createServer(function(req,res){
   let urlParts = url.parse(req.url)
   //console.log(req)
   //console.log(urlParts)
   console.log("------------")
   console.log(urlParts.pathname)
   console.log("------------")
   if(req.method == 'GET'){
  switch(urlParts.pathname){
     case "/":
        homepage(req,res);
        break;
  }
}
}).listen(3000)
console.log("Gorcarkvel e")
function homepage(req,res) {
   res.end("kKKKKKKKKK")
  }
