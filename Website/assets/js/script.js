/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////// Navigation menu

//open navigation menu

var navContainer = document.querySelector(".header__nav");
var hamburgerButton = document.querySelector(".header__icon--hamburger");
var bodyContainer = document.querySelector("body");
var cross = document.querySelector(".header__icon--cross");

var widthOfScreen = window.innerWidth;

hamburgerButton.addEventListener("click", function(){
    navContainer.classList.add("toggleOn");
    bodyContainer.classList.add("overflow");
    console.log("width" + widthOfScreen);

});

cross.addEventListener("click", function(){
    navContainer.classList.remove("toggleOn");
    bodyContainer.classList.remove("overflow");
});

window.addEventListener("resize", function(){
  if(widthOfScreen > 1023){
    navContainer.classList.remove("toggleOn");
    bodyContainer.classList.remove("overflow");
  }
});

