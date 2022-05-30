const showSearch = () => {
    document.getElementById('searchBox').style.display = "inline-block";
    document.getElementById('top-search-ico-close').style.display = "inline-block";
}

const closeSearch = () => {
    document.getElementById('searchBox').style.display = "none";
    document.getElementById('top-search-ico-close').style.display = "none";
}

window.onscroll = function () { myFunction() };

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}