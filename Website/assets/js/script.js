// simple adventlisteners for the hamburger menu
var navMenu = document.querySelector("header nav");
var body = document.querySelector("body");

    var hamburger = document.querySelector("section:nth-child(1)").addEventListener("click", function(){
        navMenu.style.top = "0";
        navMenu.style.width = "100%";
        navMenu.style.transition = "width 2sec";
        body.style.overflow = "hidden";
    });

    var cross = document.querySelector("header nav article").addEventListener("click", function(){
        navMenu.style.top = "-4000px";
    });



