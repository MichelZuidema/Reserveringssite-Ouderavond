///////////////////////////////////////////////////////////////////////////////////////////////////////////
///text effects

function textAppear(theText){
  //get the text
  var registerAppear = document.querySelector(theText);
  //distance between top and the var registerAppear
  var textPosition = registerAppear.getBoundingClientRect().top;
  //height of the window
  var screenPosition = window.innerHeight;

  //if position of the text is smaller then screen position add the class
  if(textPosition < screenPosition){
    registerAppear.classList.add("appear");
  }
}

//when scrolling text appear
window.addEventListener("scroll", function(){
  textAppear(".register__list")
});

//onload of the page text appear
window.addEventListener("load", function(){
  textAppear(".information__container--text");
});

