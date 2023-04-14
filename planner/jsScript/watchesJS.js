const degree = 6;

//первые часы am
const hr1 = document.querySelector('#hr1');
const mn1 = document.querySelector('#mn1');
const sc1 = document.querySelector('#sc1');

//вторые часы pm
const hr2 = document.querySelector('#hr2');
const mn2 = document.querySelector('#mn2');
const sc2 = document.querySelector('#sc2');

//Задаем интервал обновления
setInterval(() => {
    //Получаем селектор по времени дня
    let ampmselector = isThisTimeAMorPM();

    //Запускаем часы
    letsStartThisClock(ampmselector);
})

//передаем механизму часов, какие часы будем запускать
function letsStartThisClock(ampmselector) {
    let day = new Date();
    let hh = day.getHours() * 30;
    let mm = day.getMinutes() * degree;
    let ss = day.getSeconds() * degree;

    //Первые часы
    if (ampmselector == "AM") {
        hr1.style.transform = `rotateZ(${(hh) + (mm / 12)}deg)`;
        mn1.style.transform = `rotateZ(${mm}deg)`;
        sc1.style.transform = `rotateZ(${ss}deg)`;
    }

    //Вторые часы
    if (ampmselector == "PM") {
        hr2.style.transform = `rotateZ(${(hh) + (mm / 12)}deg)`;
        mn2.style.transform = `rotateZ(${mm}deg)`;
        sc2.style.transform = `rotateZ(${ss}deg)`;
    }
}

//Фунция для получения промежутка дня, после или до обеда
function isThisTimeAMorPM() {
    const date = new Date();
    const options = { timeZone: 'UTC', timeZoneName: 'short' };

    let timestring = date.toLocaleTimeString('en-US', options);

    if (timestring.indexOf('PM') == "-1") {
        return ampm = "AM"
    } else {
        return ampm = "PM";
    }
}