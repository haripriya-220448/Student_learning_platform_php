

const sign=document.getElementById("signup");
sign.addEventListener("click",function(){
    event.preventDefault();
    const obj={
     name:document.getElementById("name").value,
     email:document.getElementById("email").value,
     password:document.getElementById("password").value,
     cpassword:document.getElementById("cpassword").value,

     validate:function(){
        if(this.name.length>=10){
            console.log("name must be less than 10");
        }
        else if(this.password.length>10){
            console.log("give valid password");
        }
        else if(this.password != this.cpassword){
            alert("wron password");
        }
    },

            }    
    console.log("NAME : " + obj.name);
    console.log("EMAIL : " + obj["email"]);
    console.log("PASSWORD : " + obj.password);


    

    obj.validate();

  
});