var procent = document.querySelectorAll(".diagram__procentage");
var height = document.querySelectorAll(".diagram-height");


var diagramObject = {
    procent: procent,
    height: height,
    realHeight(){
        for(var x = 0; x < diagramObject.height.length; x++){
                height[x].style.height = diagramObject.procent[x].innerHTML;

                if(height[x].style.height === "100%"){
                    height[x].style.borderTopLeftRadius = "3rem";
                    height[x].style.borderTopRightRadius = "3rem";
                }
        }
    }
};

this.addEventListener('scroll', function(){
    var diagram = document.querySelector(".diagram");
    var diagramDistance = diagram.getBoundingClientRect().top;

    if(diagramDistance < 600){
        diagramObject.realHeight();
    }
});