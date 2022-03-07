document.addEventListener('click', function (e) {
    let targetEl = e.target;
    if (targetEl.classList.contains('header__burger')) {
        document.querySelector('.header__menu').classList.add('_active');
    }

    if (targetEl.classList.contains('header__menu-top-close')) {
        document.querySelector('.header__menu').classList.remove('_active');
    }

    if (targetEl.classList.contains('_open-popup')) {
        popupOpen(document.querySelector('.popup'));
    }
    if (targetEl.classList.contains('popup__close')) {
        popupClose(targetEl.closest('.popup'));
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

if (document.querySelector('.popup')) {
    let chooseMessenger = document.querySelector('.popup');
    let inputs = chooseMessenger.querySelectorAll('input');
}

// фиксированные элементы 
const lockPadding = document.querySelectorAll('.popup');

// контролирует состояние попапа (открытый, закрытый)
let unlock = true;

// время анимации по клике на попап
const timeout = 400;

// lock body scrolling
function bodyLock() {
    // после скрытия скроллинга боди сдвигается вправо на ширину скроллинг и для того чтобы это не случилось я высчитываю этот сдвиг и добавляю его к боди и фиксированным элементам в качестве правого паддинга  
    const lockPaddingValue = window.innerWidth - wrapper.offsetWidth;
    if (lockPadding.length > 0) {
        for (let i = 0; i < lockPadding.length; i++) {
            const elem = lockPadding[i];
            elem.style.paddingRight = lockPaddingValue + 'px';
        }
    }
    body.style.paddingRight = lockPaddingValue + 'px';
    wrapper.style.paddingRight = lockPaddingValue + 'px';

    // запрещаю скроллинг 
    body.classList.add('_noscroll');
    wrapper.classList.add('_noscroll');

    // подстраховка от повторных нажатий 
    // я блокирую клик по попапу на время выполнения анимации по клике на попап
    unlock = false;
    setTimeout(function () {
        unlock = true;
    }, timeout);
}

// делает обратные дейсвия функции bodyLock() 
function bodyUnLock() {
    setTimeout(function () {
        for (let i = 0; i < lockPadding.length; i++) {
            const elem = lockPadding[i];
            elem.style.paddingRight = '0px';
        }
        body.style.paddingRight = '0px';
        wrapper.style.paddingRight = '0px';
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