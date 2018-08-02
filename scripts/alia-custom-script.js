
function revealPhoneNum() {
    var el = document.querySelector(".phone-button");
    el.outerHTML = '<a href="tel:+16192796733"> +1(619) 279 - 6733 </a>';
}

function revealEmail() {
    var el = document.querySelector(".email-button");
    el.outerHTML = '<a href="mailto:aliawilkinson@gmail.com">aliawilkinson@gmail.com</a>';
}