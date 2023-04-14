var D1 = new Date(),
    D1last = new Date(D1.getFullYear(), D1.getMonth() + 1, 0).getDate(), // последний день месяца
    D1Nlast = new Date(D1.getFullYear(), D1.getMonth(), D1last).getDay(), // день недели последнего дня месяца
    D1Nfirst = new Date(D1.getFullYear(), D1.getMonth(), 1).getDay(), // день недели первого дня месяца
    calendar1 = '<tr>',
    calendar_month = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"]; // название месяца, вместо цифр 0-11

// пустые клетки до первого дня текущего месяца
if (D1Nfirst != 0) {
    for (var i = 1; i < D1Nfirst; i++) calendar1 += '<td> ';
} else { // если первый день месяца выпадает на воскресенье, то требуется 7 пустых клеток
    for (var i = 0; i < 6; i++) calendar1 += '<td>';
}

// дни месяца
for (var i = 1; i <= D1last; i++) {
    if (i != D1.getDate()) {
        calendar1 += `<td > <input id="cd${i}" type="checkbox" />` + i;
    } else {
        calendar1 += `<td id="today" style="color: red; font-weight: 850;"> <input id="cd${i}" type="checkbox" />` + i;
    }
    if (new Date(D1.getFullYear(), D1.getMonth(), i).getDay() == 0) {  // если день выпадает на воскресенье, то перевод строки
        calendar1 += '<tr>';
    }
}

// пустые клетки после последнего дня месяца
if (D1Nlast != 0) {
    for (var i = D1Nlast; i < 7; i++) calendar1 += '<td>';
}

document.querySelector('#calendar1 tbody').innerHTML = calendar1;
document.querySelector('#calendar1 thead td:last-child').innerHTML = D1.getFullYear();
document.querySelector('#calendar1 thead td:first-child').innerHTML = calendar_month[D1.getMonth()];

(function () {
    'use strict';
    var cn = 'CheckBoxes', set = {}, cook = cookies(cn) || {};
    //храним месяц
    cookies.expires = 2629743;

    function saveChecked() {
        cook[this.id] = this.checked;
        set[cn] = cook;

        // Записываем в кукис текущее значение checked
        cookies(set);
    };


    document.querySelectorAll('#calendar1 tbody td input[type=checkbox]').forEach(function (i) {
        i.onchange = saveChecked;
        // Устанавливаем значение из кукиса
        i.checked = !!cook[i.id];
    })

})()

let current_time  = new Date();
let expiration_date = new Date(current_time.getFullYear(), current_time.getMonth() + 1, 1);

//Удаляем когда наступает первый день следующего месяца
if (current_time.getTime() > expiration_date.getTime()) {
    CookiesDelete()
}

function CookiesDelete(){
    var cookies = document.cookie.split(";");
    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        var eqPos = cookie.indexOf("=");
        var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT;";
        document.cookie = name + '=; path=/; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    }
}