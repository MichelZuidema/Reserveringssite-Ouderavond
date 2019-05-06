// using the strict mode to envoke errors who be are often ignored
"use strict";

    var buttonTijdschema = document.querySelector(".question__button--send");
    
    buttonTijdschema.addEventListener("click", function tijdschema(){
        var popup = document.querySelector('popup');
        var errorText = document.querySelector('popup__text');

        errorText.style.display = "block";
        popup.style.top = "0";
        popup.style.display = "block";
        popup.style.backgroundColor = "red";

        return false;
    });


    // //close the popup
    // function popupTijdschemaStart(){
    //     var popup = document.querySelector('popup');
    //     var errorText = document.querySelector('popup__text');

    //     errorText.style.display = "none";
    //     popup.style.display = "none";
    //     popup.style.top = "-200px";
    // }