// Toggle class active

const navbarNav = document.querySelector(".navbar-nav");

// ketika humberger menu di klik

document.querySelector("#humburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};
