import http from 'http'
import url from 'url'
import fs from 'fs'
//const http = require('http')
//const url = require('url')
http.createServer(function(req,res){
   let urlParts = url.parse(req.url)
   console.log("------------")
   console.log(urlParts.pathname)
   console.log("------------")
   if(req.method == 'GET'){
  switch(urlParts.pathname){
     case "/":
        homepage(req,res);
        break;
        case "/about":
        about(req,res);
        break;
  }
}
}).listen(3003)
console.log("Gorcarkvel e")
function homepage(req,res) {
   res.end("kKKKKKKKKK")
  }
  function about(req,res){
     fs.readFile('index.html','utf8',function(err,data){
        res.write(data)
      return res.end()
     })
  }
