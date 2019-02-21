
$("section:nth-child(1)").click(function(){
        $("header nav").addClass("toggleOn");
        $("body").addClass("overflow");
      });
$("header nav article").click(function(){
    $("header nav").removeClass("toggleOn");
    $("body").removeClass("overflow");
})

$(window).resize(function() {
  if ($(window).width() > 1023) {
    $("header nav").removeClass("toggleOn");
    $("body").removeClass("overflow");
  }
});



