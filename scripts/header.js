var textbutton = document.querySelectorAll('header a > p');

setTimeout(function () {

    for (i = 0; i < textbutton.length; i++) {
        textbutton[i].style.display = "inline-block";
    }

}, 11000);