document.addEventListener("DOMContentLoaded", function() {
    const menu = document.querySelector(".menu-list");
    const links = menu.querySelectorAll(".menu__link");
    
    for (let link of links) {  
       link.addEventListener("click", function(e) {
          e.preventDefault();
 
          for (let link of links) {
             link.classList.remove("menu__link--active");
          }
          this.classList.add("menu__link--active");
         
          const clickedSection = document.querySelector(this.getAttribute("href"));
          const sections = document.querySelectorAll(".content");
 
          for (let section of sections) {
             section.classList.remove("content--active");
             section.classList.remove("content--flex-active");
          }
          clickedSection.classList.add("content--active");
       })
    }
 })