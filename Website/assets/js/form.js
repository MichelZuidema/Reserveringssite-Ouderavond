// using the strict mode to envoke errors who be are often ignored
"use strict";

//contact form
    function validate(){
        var submitButton = document.querySelector(".form__button--send");
        var popupContainer = document.querySelector(".questionPopup");


        //firstname
        var firstName = document.querySelector(".form__input--voornaam");

        //lastname
        var lastName = document.querySelector(".form__input--achternaam");

        //email
        var email = document.querySelector(".form__input--email");
        
        //phone
        var phone = document.querySelector(".form__input--telefoon");

        //child
        var child = document.querySelector(".form__input--kind");

        //message
        var message = document.querySelector(".form_textarea--bericht");

        //error message
        var errorMessage = document.querySelector(".error__form--message");

        //js injection
        preventJsInjection(firstName.value);

        preventJsInjection(email.value);

        preventJsInjection(lastName.value);
        
        preventJsInjection(phone.value);


        preventJsInjection(child.value);


        preventJsInjection(message.value);

        preventJsInjection(submitButton.value);

        console.log(message + " " + firstName + " " + lastName + " ");

        validateEmail(email.value);


        // //check for empty fields
        function checkForErrors(){

            //check the firstname
            if(!firstName.value){
                popupStart();
                errorMessage.innerHTML = "Het voornaam veld mag niet leeg zijn!";
                return;
            }else if(!isNaN(firstName.value)){
                popupStart();
                errorMessage.innerHTML = "De voornaam mag niet beginnen met een cijfer!";
                return;
            }


            //check lastname
            if(!lastName.value){
                popupStart();
                errorMessage.innerHTML = "Het achternaam veld mag niet leeg zijn!";
                return;
            }else if(!isNaN(lastName.value)){
                popupStart();
                errorMessage.innerHTML = "De achternaam mag niet beginnen met een cijfer!";
                return;
            }

            //check for email input
            if(!email.value){
                popupStart();
                errorMessage.innerHTML = "Het email veld mag niet leeg zijn!";
                return;
            }

            //check for child input
            if(isNaN(phone.value)){
                popupStart();
                errorMessage.innerHTML = "Het telefoonnummer mag niet beginnen met een letter!";
                return;
            }

            //check for child input            
            if(!child.value){
                popupStart();
                errorMessage.innerHTML = "Het betreft kind veld mag niet leeg zijn!";
                return;
            }else if(!isNaN(child.value)){
                popupStart();
                errorMessage.innerHTML = "De naam van het kind mag niet beginnen met een cijfer!";
                return;
            }

            //check for message input
            if(!message.value){
                popupStart();
                errorMessage.innerHTML = "Het bericht veld mag niet leeg zijn!";
                return;
            }

            //if everything is correct close the popup
            else{
                popupStop();
                return true;
            }
        }

        //start the popup
        function popupStart(){
            errorMessage.style.display = "block";
            popupContainer.style.top = "0";
            popupContainer.style.display = "block";
            popupContainer.style.backgroundColor = "red";
        }

        //close the popup
        function popupStop(){
            errorMessage.style.display = "none";
            popupContainer.style.display = "none";
            popupContainer.style.top = "-200px";
        }

        //email validate
        function validateEmail(email){
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }
        
        if(checkForErrors()){
            return true;
        }else{
            return false;
        }
            
    }

    
