//function to show error popup

function showPopup(title,body){
    var popupTitle = document.querySelector(".popup__title");
    var popupbody = document.querySelector(".popup__body");
    var popup = document.querySelector(".popup");

    popupTitle.innerHTML = title;
    popupbody.innerHTML = body;

    popup.style.display = "block";

    //popup dissapear after 5 seconds
    setTimeout(function(){
        popup.style.display = 'none';
    }, 5000);

}


