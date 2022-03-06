document.addEventListener('click', function (e) {
    let targetEl = e.target;
    if (targetEl.classList.contains('header__burger')) {
        document.querySelector('.header__menu').classList.add('_active');
    }

    if (targetEl.classList.contains('header__menu-top-close')) {
        document.querySelector('.header__menu').classList.remove('_active');
    }
});

// if (document.querySelector('.feedback__slider')) {
//     new Swiper('.feedback__slider', {
//         slidesPerView: 'auto',
//         loop: true,
//         spaceBetween: 19,
//         grabCursor: true,
//         pagination: {
//             el: '.feedback__slider-pagination',
//             clickable: true,
//         },

//     })
// }


