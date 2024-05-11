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
        default:
           page404(req,res);
           break
  }
}
else if(req.method == 'POST'){
   switch(urlParts.pathname){
         case "/about":
         about2(req,res);
         break;
         default:
            page404(req,res);
            break;
}
}
else{
   page404(req,res)
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
  function about2(req,res){
     res.end("AAAAAAAAAAAAAAAAAAAA")
  }
function page404(req,res){
 res.end('404')
}
