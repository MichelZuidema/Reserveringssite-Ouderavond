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
///text effects

// function textAppear(theText){
//   //get the text
//   var registerAppear = document.querySelector(theText);
//   //distance between top and the var registerAppear
//   var textPosition = registerAppear.getBoundingClientRect().top;
//   //height of the window
//   var screenPosition = window.innerHeight;

//   //if position of the text is smaller then screen position add the class
//   if(textPosition < screenPosition){
//     registerAppear.classList.add("appear");
//   }
// }

// //when scrolling text appear
// window.addEventListener("scroll", function(){
//   textAppear(".register__list")
// });

// //onload of the page text appear
// window.addEventListener("load", function(){
//   textAppear(".information__container--text");
// });

