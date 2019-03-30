
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////// anker links 

// $(document).ready(function(){

// ///////////////////////////////////
// /////// choose a day

//   $("input[type='checkbox'], #checkbox-text").on('click', function(event){
//     $("input[type='checkbox']").toggleClass("selectedBox");
//     scrollDown(200,"#time-2");
//   });

// //////////////////////////////////
// /////// Timetable 

//   $("#time-1").on('click', function(event){
//     scrollDown(200,"#person-2");
//     $(this).addClass("selectedBox");    

//     if($("#time-2, #time-3, #time-4").hasClass("selectedBox")){
//        $("#time-2, #time-3, #time-4").removeClass("selectedBox");
//     }

//   });


//   $("#time-2").on('click', function(event){
//     scrollDown(200,"#person-2");
//     $(this).addClass("selectedBox");    

//     if($("#time-1, #time-3, #time-4").hasClass("selectedBox")){
//        $("#time-1, #time-3, #time-4").removeClass("selectedBox");
//     }

//   });


//   $("#time-3").on('click', function(event){
//     scrollDown(200,"#person-2");
//     $(this).addClass("selectedBox");    

//     if($("#time-2, #time-1, #time-4").hasClass("selectedBox")){
//        $("#time-2, #time-1, #time-4").removeClass("selectedBox");
//     }

//   });


//   $("#time-4").on('click', function(event){
//     scrollDown(200,"#person-2");
//     $(this).addClass("selectedBox");    

//     if($("#time-2, #time-3, #time-1").hasClass("selectedBox")){
//        $("#time-2, #time-3, #time-1").removeClass("selectedBox");
//     }

//   });
  

// ///////////////////////////////////
// /////// persons scroll buttons

// $("#person-1").on('click', function(event){
//   $(this).addClass("selectedBox");    
//   scrollDown(100, "#ask-question");
  
//   if($("#person-2, #person-3").hasClass("selectedBox")){
//     $("#person-2, #person-3").removeClass("selectedBox");  
//  }
// });


// $("#person-2").on('click', function(event){
//   $(this).addClass("selectedBox");    
//   scrollDown(100, "#ask-question");

//   if($("#person-1, #person-3").hasClass("selectedBox")){
//     $("#person-1, #person-3").removeClass("selectedBox");
//  }
// });


// $("#person-3").on('click', function(event){
//   $(this).addClass("selectedBox");    
//   scrollDown(100, "#ask-question");

//   if($("#person-2, #person-1").hasClass("selectedBox")){
//     $("#person-2, #person-1").removeClass("selectedBox");  
//  }
// });

// //ready  en
// });

// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// //scroll down function

// var scrollBy;
// var scrollTo;

// function scrollDown(scrollBy,scrollTo){
//   if(this.hash !== ''){
//     event.preventDefault();
//     $("html, body").animate({
//       scrollTop: $(scrollTo).offset().top - scrollBy
//     }, 1300);
//   }
// }
