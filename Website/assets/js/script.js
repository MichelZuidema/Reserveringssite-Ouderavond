// using the strict mode to envoke errors who be are often ignored
"use strict";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////// Navigation menu

//open navigation menu

var navContainer = document.querySelector(".header__nav");
var hamburgerButton = document.querySelector(".header__icon--hamburger");
var bodyContainer = document.querySelector("body");
var cross = document.querySelector(".header__icon--cross");

var widthOfScreen = window.innerWidth;

hamburgerButton.addEventListener("click", function(){
  //to prevent nav bar from closing. i delete the classes when the hamburger is clicked
    if(navContainer.classList.contains("toggleOff") || navContainer.classList.contains("toggleOn")){
      navContainer.classList.remove("toggleOff");
      navContainer.classList.remove("toggleOn");
    }
    navContainer.classList.add("toggleOn");
    bodyContainer.classList.add("overflow");

});

//add toggle off effects
cross.addEventListener("click", function(){
    navContainer.classList.add("toggleOff");
    bodyContainer.classList.remove("overflow");
});

//When the screen is resized above 1023px. close the mobile nav bar
window.addEventListener("resize", function(){
  if(widthOfScreen >= 1023){
    navContainer.classList.remove("toggleOn");
    bodyContainer.classList.remove("overflow");
  }
});
///////////////////////////////////////////////////////////////////////////////////////////////////////////
///Checkbox

var label = document.querySelector(".checkbox__label");
var checkbox = document.querySelector("#day__checkbox");

label.addEventListener("click", function() {
  if(checkbox.checked === false) {
    label.style.backgroundColor = "#8FE501";
    label.style.color = "#111";
  } else {
      label.style.backgroundColor = "#1c1c1c";
      label.style.color = "#fff";
  }
});

