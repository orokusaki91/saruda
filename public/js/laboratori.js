
let labFirst = document.querySelector('.labFirst');
let labSecond = document.querySelector('.labSecond');
let labThird = document.querySelector('.labThird');


let labFirstRow = document.querySelector('#labFirstRow');
let labSecondRow = document.querySelector('#labSecondRow');
let labThirdRow = document.querySelector('#labThirdRow');

labFirst.addEventListener('click', function () {
  labFirstRow.style.display = "flex";
  labSecondRow.style.display = "none";
  labThirdRow.style.display = "none";

  labFirst.className = "activeLab";
  labSecond.className = "";
  labThird.className = "";
});

labSecond.addEventListener('click', function () {
  labFirstRow.style.display = "none";
  labSecondRow.style.display = "flex";
  labThirdRow.style.display = "none";

  labFirst.className = "";
  labSecond.className = "activeLab";
  labThird.className = "";
});

labThird.addEventListener('click', function () {
  labFirstRow.style.display = "none";
  labSecondRow.style.display = "none";
  labThirdRow.style.display = "flex";

  labFirst.className = "";
  labSecond.className = "";
  labThird.className = "activeLab";
});
