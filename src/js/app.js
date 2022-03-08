document.addEventListener('click', function (e) {
    let targetEl = e.target;
    if (targetEl.classList.contains('header__burger')) {
        document.querySelector('.header__menu').classList.add('_active');
    }

    if (targetEl.classList.contains('header__menu-top-close')) {
        document.querySelector('.header__menu').classList.remove('_active');
    }

    if (targetEl.classList.contains('balloon__close')) {
        document.querySelector('.balloon__close').closest('.balloon').classList.toggle('_hidden');
    }

    if (targetEl.classList.contains('_open-popup')) {
        popupOpen(document.querySelector('.popup'));
    }
    if (targetEl.classList.contains('popup__close')) {
        popupClose(targetEl.closest('.popup'));
    }

    let arr = { block: "start", behavior: "smooth" };

    if (targetEl.classList.contains('_scrollto-main')) {
        prevDev(e);
        document.querySelector('.main').scrollIntoView(arr);
        hideMenu();
    }

    if (targetEl.classList.contains('_scrollto-contactus')) {
        prevDev(e);
        document.querySelector('.contact__us').scrollIntoView(arr);
        hideMenu();
    }

    if (targetEl.classList.contains('_scrollto-services')) {
        prevDev(e);
        document.querySelector('.services').scrollIntoView(arr);
        hideMenu();
    }

    if (targetEl.classList.contains('_scrollto-steps')) {
        prevDev(e);
        document.querySelector('.steps').scrollIntoView(arr);
        hideMenu();
    }

    if (targetEl.classList.contains('_scrollto-location')) {
        prevDev(e);
        document.querySelector('.location').scrollIntoView(arr);
        hideMenu();
    }

    function prevDev(e) {
        e.preventDefault();
    }
    function hideMenu() {
        if (document.querySelector('.header__menu').classList.contains('_active')) {
            document.querySelector('.header__menu').classList.remove('_active');
        }
    }
});


let body = document.querySelector('body');
let wrapper = document.querySelector('.wrapper');

function popupOpen(popup) {
    popup.classList.add('_open');
    bodyLock();

    popup.addEventListener('click', function (e) {
        popupClose2(e);
    })

}
function popupClose2(elem) {
    if (!elem.target.closest('.popup__body')) {
        popupClose(elem.target.closest('.popup'));
    }
}

document.querySelectorAll('.popup').forEach(item => {
    item.addEventListener('click', (e) => {
        popupClose2(e);
    })
});

function popupClose(popup) {
    popup.classList.remove('_open');
    if (popup.classList.contains('popup')) {
        bodyUnLock();
    }
}

// if (document.querySelector('.popup')) {
//     let chooseMessenger = document.querySelector('.popup');
//     let inputs = chooseMessenger.querySelectorAll('input');
// }

const lockPadding = document.querySelectorAll('.popup');

let unlock = true;

const timeout = 300;

function bodyLock() {

    body.classList.add('_noscroll');
    wrapper.classList.add('_noscroll');
    unlock = false;
    setTimeout(function () {
        unlock = true;
    }, timeout);
}

function bodyUnLock() {
    setTimeout(function () {
        body.classList.remove('_noscroll');
        wrapper.classList.remove('_noscroll');
    }, timeout);

    unlock = false;
    setTimeout(function () {
        unlock = true;
    }, timeout);
}


// валидация форм

if (document.querySelector('.input-name')) {
    document.querySelectorAll('.input-name').forEach(item => {
        item.oninput = function (e) {
            console.log('asd');
            if (this.value.match(/[^a-zа-я\s]/gi)) {
                this.value = this.value.replace(/[^a-zа-я\s]/gi, '');
            }
        }
    })
}

if (document.querySelector('.contact__form-phone')) {
    $(".contact__form-phone").mask("+7(999)999-99-99");
}
if (document.querySelector('.popup__form-phone')) {
    $(".popup__form-phone").mask("+7(999)999-99-99");
};


import './map.js';