console.log("Portfolio Loaded Successfully");

// Variables

let name = "Kaushik";
let age = 20;

console.log(name);
console.log(age);

// Array

let skills = [
    "Python",
    "SQL",
    "HTML",
    "CSS",
    "JavaScript"
];

console.log(skills);

// Loop

for(let i=0;i<skills.length;i++){
    console.log(skills[i]);
}

// Function

function welcome(){
    alert("Welcome to My Portfolio");
}

// DOM Manipulation

document.querySelector("h1").style.cursor="pointer";

document.querySelector("h1").addEventListener("click",welcome);

// Contact Form Validation

let form=document.querySelector("form");

if(form){

    form.addEventListener("submit",function(event){

        let nameInput=document.querySelector("input[type='text']");
        let emailInput=document.querySelector("input[type='email']");
        let textarea=document.querySelector("textarea");

        if(nameInput.value==""){
            alert("Please Enter Name");
            event.preventDefault();
        }

        else if(emailInput.value==""){
            alert("Please Enter Email");
            event.preventDefault();
        }

        else if(textarea.value==""){
            alert("Please Enter Message");
            event.preventDefault();
        }

        else{

            let emailPattern=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if(!emailPattern.test(emailInput.value)){
                alert("Invalid Email Format");
                event.preventDefault();
            }

            else{
                alert("Form Submitted Successfully");
            }

        }

    });

}

// Keyup Event

document.addEventListener("keyup",function(event){
    console.log("Key Pressed:",event.key);
});

// Change Event

let select=document.querySelector("select");

if(select){

    select.addEventListener("change",function(){
        console.log("Country Selected:",select.value);
    });

}