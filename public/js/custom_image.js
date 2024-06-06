ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
            center: [56.153808, 38.849549],
            zoom: 15
        }, {
            searchControlProvider: 'yandex#search'
        }),

        // Создаём макет содержимого.
        MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        ),

        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            hintContent: 'ООО «Фабрика Аэрозолей»',
            balloonContent: 'ООО «Фабрика Аэрозолей»',
						iconCaption: 'Очень длиннный, но невероятно интересный текст'
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: 'https://ce14048.tw1.ru/fabrika_aerozoley/wp-content/themes/fabrika_aerozoley/public/images/my_icon.png',
            // Размеры метки.
            iconImageSize: [40, 50],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-35, -115]
        })

    myMap.geoObjects
        .add(myPlacemark)
});