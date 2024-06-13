document.addEventListener("DOMContentLoaded", function() {
    var box = document.getElementById('box');
    var screenWidth = window.innerWidth;
    var boxWidth = box.offsetWidth;
    var startPosition = 0;

    function moveBox() {
        if (startPosition === 0) {
            box.style.transform = "translate(" + (screenWidth - boxWidth) + "px, -50%)";
            startPosition = 1;
        } else {
            box.style.transform = "translate(0, -50%)";
            startPosition = 0;
        }
    }

    setInterval(moveBox, 2000); // Move a cada 2 segundos
});

document.addEventListener("DOMContentLoaded", function() {
    var boxb = document.getElementById('boxb');
    var screenWidth = window.innerWidth;
    var boxbWidth = boxb.offsetWidth;
    var startPosition = 0;

    function moveBox() {
        if (startPosition === 0) {
            boxb.style.transform = "translate(" + (screenWidth - boxbWidth) + "px, -50%)";
            startPosition = 1;
        } else {
            boxb.style.transform = "translate(0, -50%)";
            startPosition = 0;
        }
    }

    setInterval(moveBox, 2000); // Move a cada 2 segundos
});