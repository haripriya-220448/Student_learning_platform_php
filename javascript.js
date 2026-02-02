const platform="Reflect Learn";

let lesson_count=5;
console.log("platform name is",platform,);
console.log("lessons completed",lesson_count);

function welcome(name){
    console.log("welcome "+ name);
}

// welcome("haripriya");

lesson_count=9;
console.log("updated lesson",lesson_count);

const message=function(msg){
   alert(msg);
}

// message("hello");


let increase=()=>{
    lesson_count++;
    console.log("updated lesson",lesson_count);
}

function calculate(completed,to){
    let progress=(completed/to)*100;
    console.log("your progress is",progress);
}



const profile={
    name:"hari",
    role:"learner",
    confidence:60,
};

console.log(profile)

function get_profile(){
    console.log(profile);
}

get_profile();



const learning_status={
    completed:3,
    total:9,
    update_progress:function(){

    }

};

(function(){
    alert("welcome to Reactlearn");
})();

const btn=document.getElementById("started");
btn.addEventListener("click",function(){
    let name=prompt("enter your name");
    alert("welcome "+ name);
    window.location.href="login.html";
});

btn.addEventListener("mouseover",function(){
    btn.style.backgroundColor="green";
    btn.style.color="white";
});

btn.addEventListener("mouseout",function(){
    btn.style.backgroundColor="";
    btn.style.color="";
});


const btn1=document.getElementById("profile");
btn1.addEventListener("click",function(){
    const obj1={
        name:"hari",
        courses:4,
        age:19,
        email:"hari@gmail.com",

    }
})
