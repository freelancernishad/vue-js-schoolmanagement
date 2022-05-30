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

// var mybutton = document.getElementById("myBtn");

// // When the user scrolls down 20px from the top of the document, show the button
// mybutton.onscroll = function() {scrollFunction()};

// function scrollFunction() {
//   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//     mybutton.style.display = "block";
//   } else {
//     mybutton.style.display = "none";
//   }
// }

// function topFunction() {
//     document.body.scrollTop = 0;
//     document.documentElement.scrollTop = 0;
//   }