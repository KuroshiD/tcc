let swiperSlide = document.querySelector(".swiper-container");

// window.onload = window.setInterval(function(){
  
// }, 0);
if(this.innerWidth >= 820){
  s820();
}else if(innerWidth >= 720){
  s720();
}else if(innerWidth >= 620){
  s620();
}else if(innerWidth >= 520){
  s520();
}else if(innerWidth >= 420){
  s420();
}else if(innerWidth >= 320){
  s320();
}

function s320(){
  let swiper = new Swiper('.swiper-container', {

    slidesPerView: 3,
    spaceBetween: 10,
    slidesPerGroup: 2,

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

  });
}
function s420(){
  let swiper = new Swiper('.swiper-container', {

    slidesPerView: 3,
    spaceBetween: 10,
    slidesPerGroup: 2,

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

  });
}
function s520(){
  let swiper = new Swiper('.swiper-container', {

    slidesPerView: 3.5,
    spaceBetween: 10,
    slidesPerGroup: 2,

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

  });
}
function s620(){
  let swiper = new Swiper('.swiper-container', {

    slidesPerView: 4,
    spaceBetween: 10,
    slidesPerGroup: 3,

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

  });
};

function s720(){
  let swiper = new Swiper('.swiper-container', {

    slidesPerView: 4.5,
    spaceBetween: 10,
    slidesPerGroup: 3,

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

  });
}
function s820(){
  let swiper = new Swiper('.swiper-container', {

    slidesPerView: 5,
    spaceBetween: 10,
    slidesPerGroup: 3,

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

  });
}