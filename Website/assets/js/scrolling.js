// // using the strict mode to envoke errors who be are often ignored
// "use strict";


// function smoothScrolling(target,duration){
//     //Get the target
//     var target = document.querySelector(target);
    
//     //getBoundingClientRect = function to get distances on the page
//     var targetPosition = target.getBoundingClientRect().top;
//     console.log(targetPosition);

//     //Get the distance form the top off the page
//     var startPosition = window.pageYOffset;

//     //dinstance between targetPostion and startposition
//     var distance = targetPosition - startPosition;

//     //always null
//     var startTime = null;

//     //animation function
//     function aninmation(currentTime){

//         if(startTime === null){
//             startTime = currentTime
//         };
//         // timeElapsed is the different between the startTime and the currentTime
//         var timeElapsed = currentTime - startTime;

//         //use the crazy math function from http://www.gizma.com/easing/
//         var run = ease(timeElapsed, startPosition, distance, duration);

//         // scroll to function with the ease function, first arguments is horizontal second argument is vertical
//         window.scrollTo(0,run);

//         // if timeElapsed is less then duration set as parameter (for example 1000ms) loop through animation function
//         if(timeElapsed < duration){
//             requestAnimationFrame(aninmation);
//         }

//         //console.log to understand the aninmation function
//         // console.log("timeElapsed : " + timeElapsed + " duration" + duration);
//     }

//     //crazy math function from http://www.gizma.com/easing/
//     function ease(t, b, c, d) {
//         t /= d/2;
//         if (t < 1) return c/2*t*t*t + b;
//         t -= 2;
//         return c/2*(t*t*t + 2) + b;
//     };
    
//     //renders the aninmation. takes one parameter: a timestamp  to update your functions
//     requestAnimationFrame(aninmation);

// }

// //click function first anker
// var clickAnker = document.querySelector(".day-choosing__checkbox");
// clickAnker.addEventListener("click", function(){
//     smoothScrolling(".radio__label",1200);
// });

// //click function second anker
// var clickAnker2 = document.querySelectorAll(".radio__label");
// for(var i = 0; i < clickAnker2.length; i++){
//     clickAnker2[i].addEventListener("click", function(){
//         smoothScrolling(".persons--info",1200);
//     });
// }

// //click function third anker
// var clickAnker3 = document.querySelectorAll(".checkbox__label--1");
// for(var i = 0; i < clickAnker3.length; i++){
//     clickAnker3[i].addEventListener("click", function(){
//         console.log("heloo");
//         smoothScrolling(".question",1200);
//     });
// }
