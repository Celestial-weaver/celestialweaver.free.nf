let percentage = document.querySelector(".percentage");
let percent = document.querySelector(".percent");

navigator.getBattery().then(function (battery) {
  show = battery.level * 100 + "%";
  percent.innerHTML = Math.floor(battery.level * 100) + "%";
});

let sec = document.querySelector(".sec");
let toggle = document.querySelector(".toggle");
toggle.addEventListener("click", function () {
  sec.classList.toggle("dark");
});

alert(show);