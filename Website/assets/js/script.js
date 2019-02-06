
// simple adventlisteners for the hamburger menu
var navMenu = document.querySelector("header nav");
var body = document.querySelector("body");

    var hamburger = document.querySelector("section:nth-child(1)").addEventListener("click", function(){
        navMenu.style.display = "block";
        navMenu.style.width = "100%";
        body.style.overflow = "hidden";
    });

    var cross = document.querySelector("header nav article").addEventListener("click", function(){
            navMenu.style.display = "none";
    });

    var link = document.querySelector("header nav ul").addEventListener("click", function(){
        navMenu.style.display = "none";
});

//     var ChangeToNormalDesktop = document.querySelector("section:nth-child(1)").addEventListener("resize", function(){
//         var widthOfScreen = window.innerWidth;
//         if(widthOfScreen >= 700){
//         navMenu.style.display = "block";
//         }
    
// });

