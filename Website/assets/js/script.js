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
