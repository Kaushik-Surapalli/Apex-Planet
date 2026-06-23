// Show / Hide Password

document.getElementById("showLoginPassword").addEventListener("change",function(){

    let password=document.getElementById("loginPassword");

    if(this.checked){
        password.type="text";
    }
    else{
        password.type="password";
    }

});



// Username Availability Check

document.getElementById("name").addEventListener("keyup",function(){

    let username=this.value;
    let message=document.getElementById("message");

    if(username.toLowerCase()=="admin"){
        message.innerHTML="Username already exists";
        message.style.color="red";
    }

    else if(username==""){
        message.innerHTML="";
    }

    else{
        message.innerHTML="Username available";
        message.style.color="green";
    }

});




// Registration Validation

document.getElementById("registerForm").addEventListener("submit",function(e){

    e.preventDefault();

    let name=document.getElementById("name").value.trim();
    let email=document.getElementById("email").value.trim();
    let password=document.getElementById("password").value;
    let confirmPassword=document.getElementById("confirmPassword").value;

    if(name=="" || email=="" || password=="" || confirmPassword==""){
        alert("Please fill all fields");
        return;
    }

    if(!email.includes("@")){
        alert("Enter a valid email");
        return;
    }

    if(password.length<8){
        alert("Password should contain at least 8 characters");
        return;
    }

    if(password!=confirmPassword){
        alert("Passwords do not match");
        return;
    }
    alert("Registration Successful!");

    document.getElementById("registerForm").reset();
    document.getElementById("message").innerHTML = "";

});

document.getElementById("loginForm").addEventListener("submit", function(e){

    e.preventDefault();

    let email = document.getElementById("loginEmail").value.trim();
    let password = document.getElementById("loginPassword").value;

    if(email === "" || password === ""){
        alert("Please fill all fields");
        return;
    }

    alert("Login Successful!");

    // Clear fields
    document.getElementById("loginForm").reset();

    // Go to dashboard
    window.location.href = "dashboard.html";

});