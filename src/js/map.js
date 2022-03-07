let center = [55.648634766206186, 37.50528321163933];
let phoneIcon = '';
function init() {
    let map = new ymaps.Map('map', {
        center: center,
        zoom: 16
    });

    let placemark = new ymaps.Placemark(center, {}, {
        iconLayout: 'default#image',
        iconImageHref: 'img/svg/location-blue.svg',
        iconImageSize: [117, 151],
        iconImageOffset: [-10, -140]
    });

    map.controls.remove('searchControl'); // удаляем поиск
    map.controls.remove('trafficControl'); // удаляем контроль трафика
    map.controls.remove('typeSelector'); // удаляем тип
    map.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
    map.controls.remove('rulerControl'); // удаляем контрол правил
    map.behaviors.disable(['scrollZoom']); // отключаем скролл карты (опционально)

    // map.controls.remove('geolocationControl'); // удаляем геолокацию
    // map.controls.remove('zoomControl'); // удаляем контрол зуммирования

    if (window.innerWidth <= 425) {
        map.controls.remove('zoomControl'); // удаляем контрол зуммирования
        map.controls.remove('geolocationControl'); // удаляем геолокацию
    }

    map.geoObjects.add(placemark);

}

ymaps.ready(init);

