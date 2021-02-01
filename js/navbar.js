const click = document.querySelector(".menu-mobile");
const hide = document.querySelectorAll(".hide");

const dropdownMenu = function () {
  document.querySelector(".menu").classList.toggle("transform-navbar");
  document.querySelector(".social").classList.toggle("transform-navbar");
  document.querySelector(".dropdown").classList.toggle("toggle");
  document.querySelector(".title").classList.toggle("transform-title");
};

click.addEventListener("click", dropdownMenu);

hide.forEach((item) => {
  item.addEventListener("click", dropdownMenu);
});
