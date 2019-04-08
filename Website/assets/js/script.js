/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////// Navigation menu

//open navigation menu
$(".header__icon--hamburger").click(function(){
        $("header nav").addClass("toggleOn");
        $(".toggleOn").slideDown(2000);
        $("body").addClass("overflow");
      });
//close navigation menu
$("header nav article").click(function(){
    $("header nav").removeClass("toggleOn");
    $("body").removeClass("overflow");
})
//close navagition menu if windows gets bigger
$(window).resize(function() {
  if ($(window).width() > 1023) {
    $("header nav").removeClass("toggleOn");
    $("body").removeClass("overflow");
  }
});



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////// tijdschema message

//when send button is clicked show the popup
$(".question__button--send").click(function () {
    $(".popup").css.display = "block";
    $(".popup").slideDown(500).delay(10000).slideUp(1000);
});



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
})

