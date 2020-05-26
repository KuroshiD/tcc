let swiperSlide = document.querySelector(".swiper-container");

setTimeout(window.addEventListener("load", function(event){
  if(this.innerWidth >= 820){
    let swiper = new Swiper('.swiper-container', {
      
      slidesPerView: 5,
      spaceBetween: 10,
      slidesPerGroup: 3,
    
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },  
    
    });
  }else if(this.innerWidth >= 720){
    let swiper = new Swiper('.swiper-container', {
      
      slidesPerView: 4.5,
      spaceBetween: 10,
      slidesPerGroup: 3,
    
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },  
    
    });
  }else if(innerWidth >= 620){
    let swiper = new Swiper('.swiper-container', {
      
      slidesPerView: 4,
      spaceBetween: 10,
      slidesPerGroup: 3,
    
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },  
    
    });
  }else if(innerWidth >= 520){
    let swiper = new Swiper('.swiper-container', {
      
      slidesPerView: 3.5,
      spaceBetween: 10,
      slidesPerGroup: 2,
    
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },  
    
    });
  }else if(innerWidth >= 420){
    let swiper = new Swiper('.swiper-container', {
      
      slidesPerView: 3,
      spaceBetween: 10,
      slidesPerGroup: 2,
    
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },  
    
    });
  }else if(innerWidth >= 320){
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
}), 0);