// using the strict mode to envoke errors who be are often ignored
"use strict";

var headerLogin = document.querySelector(".header__login");
var loginButton = document.querySelector(".header__user");
var blur = document.querySelector(".blurring");

//load in the dialog
loginButton.addEventListener('click',function(){
    loginButton.style.display = "none";
    headerLogin.classList.add("header__login--on");
    //blurring the background when triggerd
    blur.classList.add("login__blur");


window.addEventListener("mouseup", function(event){

    //close the inlog dialog when somewhere else is clicked
    if(event.target != headerLogin && event.target.parentNode != headerLogin){
        headerLogin.classList.remove("header__login--on");
        loginButton.style.display = "block";
        blur.classList.remove("login__blur");
    }
    });
});
   

///////////////////////////////////////////////////////////////////////////////////////////////////
// Validatie inlog form 

function inlogValidatie(){
    var username = document.querySelector("#login--username").value;
    var password = document.querySelector("#login--password").value;
    var errorCijfer = document.querySelector(".inlog__error--cijfer");
    var errorEmpty = document.querySelector(".inlog__error--empty");
    var errorPassword = document.querySelector(".inlog__error--password");
    
    preventJsInjection(username);
    preventJsInjection(password);

    if(username === ""){
        errorEmpty.style.display = "block";
        errorCijfer.style.display = "none";
        return false;
    }else if(!isNaN(username)){
        errorCijfer.style.display = "block";
        errorEmpty.style.display = "none";
        return false;
    }else{
        if(password === ""){
            errorPassword.style.display = "block";
            return false;
        }else{
            errorPassword.style.display = "none";
            return true;
        }
    }
}

//function to replace js injection
function preventJsInjection(replace){
    return (replace + '').replace(/[\\"']/g, '\\$&').replace(/\u0000/g, '\\0');
}

window.addEventListener("load", function(){
    var error = document.querySelector(".inlog__error--php");
    
    if(error.innerHTML !== ""){
        loginButton.style.display = "none";
        headerLogin.classList.add("header__login--on");
        //blurring the background when triggerd
        blur.classList.add("login__blur");
    
        window.addEventListener("mouseup", function(event){

            //close the inlog dialog when somewhere else is clicked
            if(event.target != headerLogin && event.target.parentNode != headerLogin){
                headerLogin.classList.remove("header__login--on");
                loginButton.style.display = "block";
                blur.classList.remove("login__blur");
            }
            });
    }
}) 