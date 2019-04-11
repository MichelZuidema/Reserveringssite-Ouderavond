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

