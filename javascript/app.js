  const swiper = new Swiper('#swipe-header', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  autoHeight: true,

  // If we need pagination
  pagination: {
    el: '#swipe-header .swiper-pagination',
    clickable: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '#swipe-header .swiper-button-next',
    prevEl: '#swipe-header .swiper-button-prev',
  },

});




  const swiper2 = new Swiper('#swiper-mini', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '#swiper-mini .swiper-pagination2',
    clickable: true,

  },

  // Navigation arrows
  navigation: {
    nextEl: '#swiper-mini .swiper-button-next',
    prevEl: '#swiper-mini .swiper-button-prev',
  },

});

const swiper3 = new Swiper('#swiper3', {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,

  pagination: {
    el: '#swiper3 .swiper-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '#swiper3 .swiper-button-next',
    prevEl: '#swiper3 .swiper-button-prev',
  },

  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },

});



