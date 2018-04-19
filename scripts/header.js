var textbutton = document.querySelectorAll('header a > p');

setTimeout(function () {

    for (i = 0; i < textbutton.length; i++) {
        textbutton[i].style.display = "inline-block";
    }

}, 11000);




var volumebutton = document.querySelector('header > overlay > div:last-child > svg');

setTimeout(function () {

        volumebutton.style.display = "inline-block";
}, 2000);

setTimeout(function () {

        volumebutton.style.animationPlayState = "paused";
        volumebutton.style.animationName = "speakerposition";
//        volumebutton.style.animationDuration = "1s";
//        volumebutton.style.animationFillMode = "forwards";
}, 3000);









