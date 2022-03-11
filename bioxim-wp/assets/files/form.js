"use strict"

document.addEventListener('DOMContentLoaded', function (e) {
    if (document.querySelector('.contact__form')) {
        const form = document.querySelector('.contact__form');
        form.addEventListener('submit', formSend);
    }

    if (document.querySelector('.popup__form')) {
        const form2 = document.querySelector('.popup__form');
        form2.addEventListener('submit', popupFormSend);
    }
});

function formValidate(form) {
    let error = 0;
    let formReq = form.querySelectorAll('._req');

    for (let index = 0; index < formReq.length; index++) {
        const input = formReq[index];
        formRemoveError(input);
        if (input.value === '') {
            formAddError(input);
            error++;
        }
        else if (input.getAttribute("type") === "checkbox" && input.checked === false) {
            formAddError(input);
            error++;
        }
    }
    return error;
}
function formAddError(input) {
    input.parentElement.classList.add('_error');
    input.classList.add('_error');
}
function formRemoveError(input) {
    input.parentElement.classList.remove('_error');
    input.classList.remove('_error');
}

const uri = document.getElementById('sendmail').getAttribute('data-uri');


async function formSend(e) {
    const form = document.querySelector('.contact__form');
    e.preventDefault();
    let error = formValidate(form);

    let formData = new FormData(form);

    if (error === 0) {
        form.classList.add('_sending');
        let response = await fetch(`${uri}`, {
            method: 'POST',
            body: formData

        });
        if (response.ok) {
            let result = await response.json();
            alert(result.message);

            form.reset();
            form.classList.remove('_sending');
            removeNoScroll();
        }
        else {
            alert("Ошибка");
            form.classList.remove('_sending');
            removeNoScroll();
        }
    }
    else {
        alert('Заполните обязательные поля');
    }

}

function removeNoScroll() {
    if (document.querySelector('body').classList.contains('_noscroll')) {
        document.querySelector('body').classList.remove('_noscroll');
    }
    if (document.querySelector('.wrapper').classList.contains('_noscroll')) {
        document.querySelector('.wrapper').classList.remove('_noscroll');
    }
}

async function popupFormSend(e) {
    const formOrder = document.querySelector('.popup__form');
    e.preventDefault();
    let error = formValidate(formOrder);

    let formData = new FormData(formOrder);

    if (error === 0) {
        formOrder.classList.add('_sending');
        let response = await fetch(`${uri}`, {
            method: 'POST',
            body: formData
        });
        if (response.ok) {
            let result = await response.json();
            document.querySelector('.popup').classList.remove('_open');
            alert(result.message);

            formOrder.reset();
            formOrder.classList.remove('_sending');
            removeNoScroll();
        }
        else {
            alert("Ошибка");
            formOrder.classList.remove('_sending');
            removeNoScroll();
        }
    }
    else {
        alert('Заполните обязательные поля');
    }

}