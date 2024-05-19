let menu = document.querySelector("#menu-btn");
let navbar = document.querySelector(".header .navbar");
let user = document.querySelector(".header .user");

menu.onclick = () => {
  menu.classList.toggle("fa-times");
  navbar.classList.toggle("active");
  user.classList.toggle("active");
};

window.onscroll = () => {
  menu.classList.remove("fa-times");
  navbar.classList.remove("active");
  user.classList.remove("active");
};

var swiper = new Swiper(".home-slider", {
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".reviews-slider", {
  loop: true,
  spaceBetween: 20,
  autoHeight: true,
  grabCursor: true,
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

let loadMoreBtn = document.querySelector(".packages .load-more .btn");
let currentItem = 2;

loadMoreBtn.onclick = () => {
  let boxes = [...document.querySelectorAll(".packages .box-container .box")];
  for (var i = currentItem; i < currentItem + 2; i++) {
    boxes[i].style.display = "inline-block";
  }
  currentItem += 2;
  if (currentItem >= boxes.length) {
    loadMoreBtn.style.display = "none";
  }
};

// var skrg = new Date();

// // Format tanggal menjadi YYYY-MM-DD (sesuai dengan format input type date)
// var yyyy = skrg.getFullYear();
// var mm = String(skrg.getMonth() + 1).padStart(2, "0"); // Bulan dimulai dari 0
// var dd = String(skrg.getDate()).padStart(2, "0");
// var sekarang = yyyy + "-" + mm + "-" + dd;

// // Mengatur nilai default input type date menjadi tanggal hari ini
// document.getElementById("tglJanji").value = sekarang;
