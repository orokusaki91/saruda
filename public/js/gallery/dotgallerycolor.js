let btn = document.querySelectorAll('.showSingle');
for (let i = 0; i < btn.length; i++) {
  btn[i].addEventListener("click", colorMe);
}
function colorMe() {
  for (var i = 0; i < btn.length; i++) {
    btn[i].style.background = "transparent";
    btn[i].style.color = "#000";
  }
  this.style.background = "#845248";
  this.style.color = "#fff";
}
