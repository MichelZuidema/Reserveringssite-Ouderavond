//buttons on the index array
let changeTextButton = document.querySelectorAll(".CMS__paragraaf");
//buttons on the index apart 
let changeButton1 = document.querySelector(".CMS__active--1");
let changeButton2 = document.querySelector(".CMS__active--2");

//model
const changeTextModel = document.querySelector(".model--container");
// model tab 1
const tabs1 = document.querySelector(".model__tab--1");
// model tab 1
const tabs2 = document.querySelector(".model__tab--2");

let cmsTab1 = document.querySelector(".model__tab__button--1");
let cmsTab2 = document.querySelector(".model__tab__button--2");

//both tabs input
let tabs1Header = document.querySelector(".model__tab--1 input");
let tabs2Header = document.querySelector(".model__tab--2 input");

// input title
const headerInput = document.querySelector('.model__input--title');
//index title
var infoHeader = document.querySelector(".information__heading");
// indext title
let infoHeader2 = document.querySelector(".register--heading");
// model textarea
let textarea = document.querySelector(".model__textarea");
//text in index
const textInBrowser = document.querySelector(".information__container--text");

let list = document.querySelector(".register__list");
let paragraafHome = document.querySelector(".information__container--text");

let textarea1 = document.querySelector(".model__textarea--1");
let textarea2 = document.querySelector(".model__textarea--2");


  textarea2.innerHTML = list.innerHTML;
  textarea1.innerHTML = paragraafHome.innerHTML;

  changeButton1.addEventListener("click", function(){
    blur.classList.add("login__blur");
    changeTextModel.classList.toggle("CMS__model--active");
    tabs2.style.display = "none";
    tabs1.style.display = "block";
    cmsTab1.style.backgroundColor = "#8FE501";
    cmsTab1.style.color = "#111";
    cmsTab2.style.color = "#f1f1f1";
    cmsTab2.style.backgroundColor = "#1C1C1C";
  });

  changeButton2.addEventListener("click", function(){
    blur.classList.add("login__blur");
    changeTextModel.classList.toggle("CMS__model--active");
    tabs2.style.display = "block";
    tabs1.style.display = "none";
    cmsTab2.style.backgroundColor = "#8FE501";
    cmsTab2.style.color = "#111";
    cmsTab1.style.color = "#f1f1f1";
    cmsTab1.style.backgroundColor = "#1C1C1C";
  });



  window.addEventListener("mouseup", function(event){

    //close the inlog dialog when somewhere else is clicked
    if(event.target != changeTextModel && event.target.parentNode != changeTextModel){
        if(event.target != tabs1 && event.target.parentNode != tabs1){
          if(event.target != tabs2 && event.target.parentNode != tabs2){
            changeTextModel.classList.remove("CMS__model--active");
            blur.classList.remove("login__blur");
          }  
        }
    }
});

var wYSIWYG = document.querySelector(".ck-editor__main");
wYSIWYG.addEventListener("click",function(){
    changeTextModel.classList.add("CMS__model--active");
    blur.classList.add("login__blur");
});

var tooblar = document.querySelector(".ck-toolbar").addEventListener("click", function(){
    changeTextModel.classList.add("CMS__model--active");
    blur.classList.add("login__blur");
});


var wYSIWYG3 = document.querySelector(".model__tab--2 div");
wYSIWYG3.addEventListener("click",function(){
    changeTextModel.classList.add("CMS__model--active");
    blur.classList.add("login__blur");
});

//change header text 
cmsTab1.innerHTML = infoHeader.innerHTML;
cmsTab2.innerHTML = infoHeader2.innerHTML;

tabs1Header.value = infoHeader.innerHTML;
tabs2Header.value = infoHeader2.innerHTML;


cmsTab1.addEventListener("click", function(){
  tabs2.style.display = "none";
  tabs1.style.display = "block";
  cmsTab1.style.backgroundColor = "#8FE501";
  cmsTab1.style.color = "#111";
  cmsTab2.style.color = "#f1f1f1";
  cmsTab2.style.backgroundColor = "#1C1C1C";
});

cmsTab2.addEventListener("click", function(){
  tabs2.style.display = "block";
  tabs1.style.display = "none";
  cmsTab2.style.backgroundColor = "#8FE501";
  cmsTab2.style.color = "#111";
  cmsTab1.style.color = "#f1f1f1";
  cmsTab1.style.backgroundColor = "#1C1C1C";
});


function getInnerHtml(title,body){
  headerInput.value = title.innerHTML;
  textarea.value = body.innerHTML;
}