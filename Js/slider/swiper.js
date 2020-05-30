let swiperSlide = document.querySelector(".swiper-container");
var teste =  0;
window.onload = window.setInterval(function(){
  if(this.innerWidth >= 820 && (teste == 0 || teste != this.innerWidth)){
    s820();
    teste = this.innerWidth;
  }else if(innerWidth >= 720 && (teste == 0 || teste != this.innerWidth)){
    s720();
    teste = this.innerWidth;
  }else if(innerWidth >= 620 && (teste == 0 || teste != this.innerWidth)){
    s620();
    teste = this.innerWidth;
  }else if(innerWidth >= 520 && (teste == 0 || teste != this.innerWidth)){
    s520();
    teste = this.innerWidth;
  }else if(innerWidth >= 420 && (teste == 0 || teste != this.innerWidth)){
    s420();
    teste = this.innerWidth;
  }else if(innerWidth >= 320 &&(teste == 0 || teste != this.innerWidth)){
    s320();
    teste = this.innerWidth;
  }
}, 100);


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