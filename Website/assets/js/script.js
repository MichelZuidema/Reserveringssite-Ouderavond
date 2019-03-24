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
/////// anker links 

$(document).ready(function(){
  $("#choose-time div").on('click', function(event){
    $(this).toggleClass("selectedBox");

    if(this.hash !== ''){
      event.preventDefault();
      var hash = this.hash;

      $("html, body").animate({
        scrollTop: $(hash).offset().top - 220
      }, 900);
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


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////// mentor page

$("#mentor-wijzig").click(function(){
  $("#mentor-notities").html("<textarea>halooooooosadmklsl;fkdsjfjsd;kfjk;dsjfl;ks</textarea>");
  $("#mentor-notities").css.width = "50px";
});

