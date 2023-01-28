// Single products js
let limg = document.getElementById("limg");
let simg = document.getElementsByClassName("subimg");

simg[0].onclick = function () {
  limg.src = simg[0].src;
  simg[0].style.filter = "blur(0px)";
};
simg[1].onclick = function () {
  limg.src = simg[1].src;
  simg[1].style.filter = "blur(0px)";
};
simg[2].onclick = function () {
  limg.src = simg[0].src;
  simg[2].style.filter = "blur(0px)";
};
