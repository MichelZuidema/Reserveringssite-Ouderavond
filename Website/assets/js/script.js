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


//////////////////////////////////////v//////////////////////////////////////Checkboxes

var checkbox = document.querySelector(".day-choosing__checkbox");
var checkboxContainer = document.querySelector(".checkbox__label");

checkbox.addEventListener("click", function(){
  if(checkbox.checked === true){
    checkboxContainer.style.backgroundColor = "#8FE501";
    checkboxContainer.style.color = "#111";    
  }else{
    checkboxContainer.style.backgroundColor = ""; 
    checkboxContainer.style.color = "#fff";    
  }
});

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////// tijdschema message


//hides the popup and the summary
$("#summary").hide();

//when send button is clicked show the popup
// $(".sendButton").click(function(){
function sendReservation() {
  $(".popup").css.display = "block";
  $(".popup")
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
