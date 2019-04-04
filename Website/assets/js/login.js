var loginButton = document.querySelector(".header__user__login");
var headerLogin = document.querySelector(".header__login");

loginButton.addEventListener("click", function(){

    var clicks = $(this).data('clicks');

    if(clicks){
        headerLogin.style.display = "block";
    }else{
        headerLogin.style.display = "none";
    }

    $(this).data("clicks", !clicks);
    
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