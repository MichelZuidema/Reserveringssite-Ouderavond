var loginButton = document.querySelector(".header__user__login");
var headerLogin = document.querySelector(".header__login");
var body = document.querySelector("body");

var mover = 0;

function step(timestamp){
    body.style.overflow = "hidden";
    headerLogin.style.top = mover;
    mover+=5;
    var progess = requestAnimationFrame(step);
    if(mover >= 250){
        cancelAnimationFrame(progess);
        mover-=5;
    }
}

function stepBack(timestamp){
    body.style.overflow = "scroll";
    headerLogin.style.top = mover;
    mover-=5;
    var progess = requestAnimationFrame(stepBack);
    if(mover <= -800){
        cancelAnimationFrame(progess);
    }
}

loginButton.addEventListener("click", function(event){
    step();

    window.addEventListener("mouseup", function(event){
        if(event.target != headerLogin){
            stepBack();
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
