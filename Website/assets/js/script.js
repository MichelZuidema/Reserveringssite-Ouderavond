
$("section:nth-child(1)").click(function(){
        $("header nav").addClass("toggleOn");
      });
$("header nav article").click(function(){
    $("header nav").removeClass("toggleOn")
})

$(window).resize(function() {
  if ($(window).width() > 1023) {
     $("header nav").removeClass("toggleOn")
  }
});



