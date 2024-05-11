let fs = require('fs')
let path = require('path')

const man = {
   name:"Gar",
   age:34,
   car:"BMW"
}
fs.writeFile('newFil.json',JSON.stringify(man),function(err){
   if(err)console.log(err)
})
