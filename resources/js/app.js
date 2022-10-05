const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

document.querySelector("#collapseNavbar").addEventListener("click", function () {
  let dashboard = document.querySelector(".dashboard");
  let nav = document.querySelector(".nav");

  dashboard.classList.toggle('nav-collapsed');
  nav.classList.toggle('nav-collapsed');
});
