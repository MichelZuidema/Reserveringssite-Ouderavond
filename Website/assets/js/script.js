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
    if(this.hash !== ''){
      event.preventDefault();
      var hash = this.hash;
      $("html, body").animate({
        scrollTop: $("#time-2").offset().top - 220
      }, 1300);
    }
  });

//////////////////////////////////
/////// Timetable 

  $("#time-1 , #time-2, #time-3, #time-4").on('click', function(event){
    if($("#time-1 , #time-2, #time-3, #time-4").hasClass("selectedBox")){
       $(this).removeClass("selectedBox");
    }else{
       $(this).addClass("selectedBox");
       if(this.hash !== ''){
        event.preventDefault();
        $("html, body").animate({
          scrollTop: $("#available-1").offset().top + 100
        }, 1300);
      }
    }
  });

///////////////////////////////////
/////// persons scroll buttons

$("#person-1 , #person-2, #person-3").on('click', function(event){
  if($("#person-1 , #person-2, #person-3").hasClass("selectedBox")){
    $(this).removeClass("selectedBox");
 }else{
    $(this).addClass("selectedBox");
    if(this.hash !== ''){
     event.preventDefault();
     $("html, body").animate({
       scrollTop: $("#ask-question textarea").offset().top + 100
     }, 1300);
   }
 }
});
});

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////// tijdschema message


//hides the popup and the summary
$("#summary").hide();

//when send button is clicked show the popup
$(".sendButton").click(function(){
  $(".questionPopup").css.display = "block";
  $(".questionPopup")
    .slideDown(500)
    .delay(4000)
    .slideUp(1000);
});

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
