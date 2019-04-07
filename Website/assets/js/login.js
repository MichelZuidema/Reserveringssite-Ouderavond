var loginButton = document.querySelector(".header__user__login");
var headerLogin = document.querySelector(".header__login");
var body = document.querySelector("body");

//var to move the dialog
var mover = 0;

//function to move inlog dialog
function step(timestamp){
    body.style.overflow = "hidden";
    headerLogin.style.top = mover;
    mover+=8;
    var progess = requestAnimationFrame(step);
    if(mover >= 250){
        cancelAnimationFrame(progess);
        mover-=8;
    }
}

//function to move dailog back out the screen
function stepBack(timestamp){
    body.style.overflow = "scroll";
    headerLogin.style.top = mover;
    mover-=10;
    var progess = requestAnimationFrame(stepBack);
    if(mover <= -400){
        cancelAnimationFrame(progess);
        mover+=10;
    }
}

//when login button is clicked start "step" function
loginButton.addEventListener("click", function(event){
    step();
    //hiddes the loginbutton when login dialog is opent. to prevent problems
    loginButton.style.display = "none";


    window.addEventListener("mouseup", function(event){

        //close the inlog dialog when somewhere else is clicked
        if(event.target != headerLogin && event.target.parentNode != headerLogin){
            stepBack()
            loginButton.style.display = "block";
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


////////////////////////////////////////////////////////////////////////////////////////////////////
/// animation
