let view ={
showNumber:function(n) {
   let el = document.getElementById("showRes")
   el.innerHTML = n
  }
}
//console.log(view.showNumber(111222))

let model = {
number:0,
calculate:function(x,y) {
   this.number = x*y;
   let result = this.number
   view.showNumber(result)
  }
}
//console.log(model.calculate(5,4))
let controller = {
handleClick:function() {
   model.calculate(3,10)
  }
}
controller.handleClick()
