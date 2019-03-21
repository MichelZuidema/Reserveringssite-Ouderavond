
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////// Navigation menu
//open navigation menu
$("#header-hamburger").click(function(){
        $("header nav").addClass("toggleOn");
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
/////// Timetable

$selectedTime = 0;

$("#time-1").click(function(){
  $(this).toggleClass("selectedBox");
  $("#time-2, #time-3, #time-4").removeClass("selectedBox");
  var hash = "#timetable-info";
  location.hash = hash;

  //check for a class
  if($(this).hasClass("selectedBox")){
    selectedTime = 1;
  }
})

$("#time-2").click(function(){
  $(this).toggleClass("selectedBox");
  $("#time-1, #time-3, #time-4").removeClass("selectedBox");
  var hash = "#timetable-info";
  location.hash = hash;

  //check for a class
  if($(this).hasClass("selectedBox")){
    selectedTime = 2;
  }
})

$("#time-3").click(function(){
  $(this).toggleClass("selectedBox");
  $("#time-1, #time-2, #time-4").removeClass("selectedBox");
  var hash = "#timetable-info";
  location.hash = hash;

  //check for a class
  if($(this).hasClass("selectedBox")){
    selectedTime = 3;
  }
})

$("#time-4").click(function(){
  $(this).toggleClass("selectedBox");
  $("#time-1, #time-3, #time-2").removeClass("selectedBox");
  var hash = "#timetable-info";
  location.hash = hash;

  //check for a class
  if($(this).hasClass("selectedBox")){
    selectedTime = 4;
  }
})


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////// Choose day 

var selectedDay = 0;

$("#choose-time div").click(function(){
  $(this).toggleClass("selectedBox");
  var hash = "#timetable";
  location.hash = hash;

  //check for a class
  if($(this).hasClass("selectedBox")){
    selectedDay = 1;
  }
})

$(document).ready(function(){
  $("#choose-time div").on('click', function(event) {
      if (this.hash !== "") {
          event.preventDefault();

          var hash = this.hash;
         
          $('html, body').animate({
              scrollTop: $(hash).offset().top - 220
          }, 900);
      }
  });
});

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////// Choose persons

var selectedPerson = 0;

$("#person-1").click(function(){
  $(this).toggleClass("selectedBox");
  $("#person-2, #person-3").removeClass("selectedBox");
  var hash = "#ask-question";
  location.hash = $hash;

  //check for a class
  if($(this).hasClass("selectedBox")){
    selectedPerson = 1;
  }
})

$("#person-2").click(function(){
  $(this).toggleClass("selectedBox");
  $("#person-1, #person-3").removeClass("selectedBox");
  $hash = "#ask-question";
  location.hash = $hash;

  //check for a class
  if($(this).hasClass("selectedBox")){
    $selectedPerson = 2;
  }
})

$("#person-3").click(function(){
  $(this).toggleClass("selectedBox");
  $("#person-1, #person-2").removeClass("selectedBox");
  $hash = "#ask-question";
  location.hash = $hash;

  //check for a class
  if($(this).hasClass("selectedBox")){
    $selectedPerson = 3;
  }
})


