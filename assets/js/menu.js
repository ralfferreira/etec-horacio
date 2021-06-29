const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".header-list");
const links = document.querySelectorAll(".header-list li");

hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("open");
  links.forEach(link => {
    link.classList.toggle("fade");
  });
});