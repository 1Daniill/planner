(function() {
    'use strict';
    var cn = 'CheckBoxes', set = {}, cook = cookies(cn) || {};
    cookies.expires = 60*60*24;
    console.log("something");

    function saveChecked() {
        cook[this.id] = this.checked;
        set[cn] = cook;
        console.log(set);

        // Записываем в кукис текущее значение checked
        cookies(set);

    };


    document.querySelectorAll('#ch input[type=checkbox]').forEach(function(i) {
        i.onchange = saveChecked;
        // Устанавливаем значение из кукиса
        i.checked = !!cook[i.id];
    })

})();