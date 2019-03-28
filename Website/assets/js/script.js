/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////// Navigation menu

//open navigation menu
$("#header-hamburger").click(function(){
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
/////// anker links 

$(document).ready(function(){

///////////////////////////////////
/////// choose a day

  $("#choose-time div").on('click', function(event){
    $(this).toggleClass("selectedBox");
    scrollDown(200,"#time-2");
  });

//////////////////////////////////
/////// Timetable 

  $("#time-1").on('click', function(event){
    scrollDown(200,"#person-2");
    $(this).addClass("selectedBox");    

    if($("#time-2, #time-3, #time-4").hasClass("selectedBox")){
       $("#time-2, #time-3, #time-4").removeClass("selectedBox");
    }

  });


  $("#time-2").on('click', function(event){
    scrollDown(200,"#person-2");
    $(this).addClass("selectedBox");    

    if($("#time-1, #time-3, #time-4").hasClass("selectedBox")){
       $("#time-1, #time-3, #time-4").removeClass("selectedBox");
    }

  });


  $("#time-3").on('click', function(event){
    scrollDown(200,"#person-2");
    $(this).addClass("selectedBox");    

    if($("#time-2, #time-1, #time-4").hasClass("selectedBox")){
       $("#time-2, #time-1, #time-4").removeClass("selectedBox");
    }

  });


  $("#time-4").on('click', function(event){
    scrollDown(200,"#person-2");
    $(this).addClass("selectedBox");    

    if($("#time-2, #time-3, #time-1").hasClass("selectedBox")){
       $("#time-2, #time-3, #time-1").removeClass("selectedBox");
    }

  });
  

///////////////////////////////////
/////// persons scroll buttons

$("#person-1").on('click', function(event){
  $(this).addClass("selectedBox");    
  scrollDown(100, "#ask-question");
  
  if($("#person-2, #person-3").hasClass("selectedBox")){
    $("#person-2, #person-3").removeClass("selectedBox");  
 }
});


$("#person-2").on('click', function(event){
  $(this).addClass("selectedBox");    
  scrollDown(100, "#ask-question");

  if($("#person-1, #person-3").hasClass("selectedBox")){
    $("#person-1, #person-3").removeClass("selectedBox");
 }
});


$("#person-3").on('click', function(event){
  $(this).addClass("selectedBox");    
  scrollDown(100, "#ask-question");

  if($("#person-2, #person-1").hasClass("selectedBox")){
    $("#person-2, #person-1").removeClass("selectedBox");  
 }
});

//ready  en
});

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//scroll down function

var scrollBy;
var scrollTo;

function scrollDown(scrollBy,scrollTo){
  if(this.hash !== ''){
    event.preventDefault();
    $("html, body").animate({
      scrollTop: $(scrollTo).offset().top - scrollBy
    }, 1300);
  }
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////// tijdschema message


//hides the popup and the summary
$("#summary").hide();

//when send button is clicked show the popup
// $(".sendButton").click(function(){
function sendReservation() {
  $(".questionPopup").css.display = "block";
  $(".questionPopup")
    .slideDown(500)
    .delay(4000)
    .slideUp(1000);

    // return false; // moet alleen als er fouten zijn gevonden
}
// });

//when clicked show button: the current info is show
$("#showButton").click(function(){
  $("#summary").css.display = "block";

  var clicks = $(this).data('clicks');

  //oneven 
  if(clicks){
    $("#summary")
    .slideUp(500);

    //even
  }else{
    $("#summary")
    .slideDown(500);
  }
  
  $(this).data("clicks", !clicks);
});
