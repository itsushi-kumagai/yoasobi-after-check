var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    autoHeight: true,
    direction: 'horizontal',
    slidesPerView: 1.4,
    spaceBetween: 20,
    centeredSlides : true,
    loop: true,

    // Navigation arrows
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        1428: {
        slidesPerView: 4.6,
        spaceBetween: 20,
        },
        1200: {
        slidesPerView: 4.1,
        spaceBetween: 20,
        },
        1024: {
        slidesPerView: 3.7,
        spaceBetween: 20,
        },
        930: {
        slidesPerView: 3.2,
        spaceBetween: 20,
        },
        860: {
        slidesPerView: 2.8,
        spaceBetween: 20,
        },
        730: {
        slidesPerView: 2.5,
        spaceBetween: 20,
        },
        584: {
        slidesPerView: 2,
        spaceBetween: 20,
        },
        500: {
        slidesPerView: 1.1,
        spaceBetween: 30,
        },
        375: {
        slidesPerView: 1.5,
        spaceBetween: 10,
        }
    }

})
