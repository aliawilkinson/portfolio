
function revealPhoneNum() {
    var el = document.querySelector(".phone-button");
    el.outerHTML = '<a href="tel:+16192796733"> +1(619) 279 - 6733 </a>';
}

function revealEmail() {
    var el = document.querySelector(".email-button");
    el.outerHTML = '<a href="mailto:aliawilkinson@gmail.com?subject=Position%20Available:%20&body=Hi%20Alia,%0A%0A%20I%20saw%20your%20portfolio%20site,%20love%20it.%20%20I%20wanted%20to%20reach%20out%20about%20an%20opportunity%20we%20have%20for%20you:%0A%0A%0AThanks,%0A%0A">aliawilkinson@gmail.com</a>';
}