// On Scroll Header Fixed and Top to Bottom
window.onscroll = function () {
  myFunction();
};

var header = document.getElementById("myHeader");
var mybutton = document.getElementById("myBtn");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    mybutton.style.display = "block";
    header.classList.add("sticky");
  } else {
    mybutton.style.display = "none";
    header.classList.remove("sticky");
  }
}
