// This code adds an event listener to the window object that listens for the 'scroll' event
document.onscroll = () => {
    if (window.scrollY > 0) {
      document.querySelector(".header").classList.add("active");
    } else {
      document.querySelector(".header").classList.remove("active");
    }
  };
  
  // This code adds an event listener to the document object that listens for the 'load' event.
  document.onload = () => {
    if (window.scrollY > 0) {
      document.querySelector(".header").classList.add("active");
    } else {
      document.querySelector(".header").classList.remove("active");
    }
  };
  
  // These constants can then be used to reference these HTML elements
  const navbar = document.querySelector(".header .navbar");
  const menuButton = document.querySelector(".header .menu");
  
  // to control the visibility or appearance of the navigation menu on the web page.
  menuButton.addEventListener("click", () => {
    navbar.classList.toggle("show");
  });
  
  // to hide the navigation menu when the user scrolls away from the top of the page, to ensure that the menu does not overlap with the content of the page.
  document.onscroll = () => {
    navbar.classList.remove("show");
    if (window.scrollY > 0) {
      document.querySelector(".header").classList.add("active");
    } else {
      document.querySelector(".header").classList.remove("active");
    }
  };
  
  // this code adds an event listener to the document object that listens for the 'load' event. 
  document.onload = () => {
    if (window.scrollY > 0) {
      document.querySelector(".header").classList.add("active");
    } else {
      document.querySelector(".header").classList.remove("active");
    }
  };
  