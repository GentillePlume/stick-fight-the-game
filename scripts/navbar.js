// ############################################################
// This script part make the navigation bar fixed on top when the
// header section is left
// ############################################################

function navbar()
{
    // Get the header size
    var headersize = $('header').height(); 
    var navsize = $('nav').height(); 
    
    var effectstart = headersize - navsize;
    
    /*console.log($(window).scrollTop());*/
    
    // From the moment when the header size equivalent 
    // is scrolled, add the class "scrolled" to the
    // navigation bar
    if ($(window).scrollTop() > effectstart)
    {
        $('nav').addClass('scrolled');
        /*console.log("class added !");*/
    }
    
    // If the header size equivalent isn't scrolled,
    // the class "scrolled" is removed from the navigation bar
    else
    {
        $('nav').removeClass('scrolled');
        /*console.log("class removed !");*/
    }
}

// ##### The previous function is executed :

// Every .5s
setInterval(navbar, 500);
// When user is scrolling
$(window).on('scroll', navbar);