let menu = document.querySelector('#menu-btn'); 
let navbar = document.querySelector('.header .navbar');

// Check if both elements are selected correctly
if (menu && navbar) {
    menu.onclick = () => {
        menu.classList.toggle('fa-times');
        navbar.classList.toggle('active');
    };

    window.onscroll = () => {
        menu.classList.remove('fa-times');
        navbar.classList.remove('active');
    };
};

var homeSwiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});

var reviewsSwiper = new Swiper(".reviews-slider", {
    loop:true,
    spaceBetween: 20,
    autoHeight:true,
    grabCursor:true,
    breakpoints: {
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
    },
});

let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

document.getElementById("loadMoreBtn").addEventListener("click", function(){
  let hiddenpackages = document.querySelectorAll(".box.hidden");

  hiddenpackages.forEach((box, index) => {
    if(index < 2){
      box.classList.remove("hidden");
    }
  });
  if(document.querySelectorAll(".box.hidden").length === 0) {
    this.style.display = "none";
  }
});
