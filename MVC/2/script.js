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
      model.calculate(3,2)
     }
   }
   //console.log(controller.handleClick())

   // Sa piti ashxati bayc chgites xi chi ashxatum
(function() {
let app = {
   init:function(){
      this.main();
      this.event();
   },
   main:function(){

   },
   event:function(){
      let el1 = document.getElementById("calcUser")
      el1.onclick = controller.handleClick
   },
}
app.init()
}())
