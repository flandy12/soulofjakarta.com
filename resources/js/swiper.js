  // core version + navigation, pagination modules:
  import Swiper, {
      Navigation,
      Pagination
  } from 'swiper';
  //scroll smooth 

// import ScrollReveal from "scrollreveal";

// ScrollReveal().reveal('.swiper-slide',{  delay:600 });
  // Now you can use Swiper
  const swiper = new Swiper('.swiper', {
      // Install modules
      modules: [Navigation, Pagination],
      slidesPerView: 4,
      spaceBetween: 30,
      pagination: {
          el: ".swiper-pagination",
          clickable: true,
      },
      breakpoints: {
          // when window width is >= 320px
          320: {
              slidesPerView: "auto",
              spaceBetween: 20
          },
          // when window width is >= 480px
          480: {
              slidesPerView: 3,
              spaceBetween: 30
          },
          // when window width is >= 640px
          640: {
              slidesPerView: 3,
              spaceBetween: 40
          }
      }
  });