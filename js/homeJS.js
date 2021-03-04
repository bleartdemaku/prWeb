var circle = document.getElementById("circle");
var ButoniUP = document.getElementById("ButoniUP");
var ButoniDown = document.getElementById("ButoniDown");

var rotateValue = circle.style.transform;
var rotateSum;

ButoniUP.onclick = function(){
    rotateSum = rotateValue + "rotate(-90deg)";
    circle.style.transform = rotateSum;
    rotateValue = rotateSum;
}

ButoniDown.onclick = function(){
    rotateSum = rotateValue + "rotate(90deg)";
    circle.style.transform = rotateSum;
    rotateValue = rotateSum;
}