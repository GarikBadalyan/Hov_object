function User(name){
   this.name = name,
   this.seyHello=()=>{
      console.log("hello" + " " + this.name)
   }
}
let user = new User("John")
user.seyHello()
//?useTimezone=true&serverTimezone=UTC
