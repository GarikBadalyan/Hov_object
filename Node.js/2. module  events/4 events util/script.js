


let evt = require('events')
let utl = require('util')
function User1(name) {
   this.name = name
  };
  utl.inherits(User1,evt.EventEmitter)
let kar = new User1("Karen")
let and = new User1("Andranik")
let nar = new User1("Narek")
let names = [kar,and,nar]
names.forEach(function (a) {
   a.on("azganun",function(text){
      console.log(a.name + " " + text )
   })
 })
 kar.emit("azganun", "Badalyan")
 nar.emit("azganun", "Sargsyan")
 and.emit("azganun", "Grigoryan")
