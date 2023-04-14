<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale=1.0">
    <title>Комментарий разработчику</title>


    <link rel="stylesheet" href="http://study/planner/main_css.css" type="text/css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
            integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
            crossorigin="anonymous"></script>


    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">


    <script>
        var months = new Array(13);
        months[1] = "января";
        months[2] = "февраля";
        months[3] = "марта";
        months[4] = "апреля";
        months[5] = "мая";
        months[6] = "июня";
        months[7] = "июля";
        months[8] = "августа";
        months[9] = "сентября";
        months[10] = "октября";
        months[11] = "ноября";
        months[12] = "декабря";

        var time = new Date();
        var thismonth = months[time.getMonth() + 1];
        var date = time.getDate();
        var thisyear = time.getYear();
        var day = time.getDay() + 1;

        if (thisyear < 2000)
            thisyear = thisyear + 1900;
        if (day == 1) DayofWeek = "Воскресенье";
        if (day == 2) DayofWeek = "Понедельник";
        if (day == 3) DayofWeek = "Вторник";
        if (day == 4) DayofWeek = "Среда";
        if (day == 5) DayofWeek = "Четверг";
        if (day == 6) DayofWeek = "Пятница";
        if (day == 7) DayofWeek = "Суббота";
    </script>

    <script>
        setInterval(function () {
            var cd = new Date();
            var clockdat = document.getElementById("clockdat");
            clockdat.innerHTML = cd.toLocaleTimeString();
        }, 1000);
    </script>


</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand p-0" href="http://study/planner/page1.php"> <img
                    src="http://study/planner/Daily%20Log(1).png" alt="Daily Log" width="100"/> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="http://study/planner/page1.php">Знакомство</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="http://study/planner/page2-main.php">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://study/planner/page3-useful.php">Полезное</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://study/planner/page4-settings.php">Настройки</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="btn-group dropstart " style="margin-right: 20px; ">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Личный кабинет
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="http://study/planner/test3.php">Войти</a></li>
            <li><a class="dropdown-item" href="http://study/planner/registration.php">Зарегистрироваться</a></li>
            <li><a class="dropdown-item" href="http://study/planner/page5-comment.php">Оставить комментарий разработчику</a>
            </li>
        </ul>
    </div>
</nav>


<div class="text-center my-4 ">
    <span style="color:black; font-size:18px;background: rgba(211,211,211,0.7);">Сегодня:</span>
    <span style="color:black; font-size:18px;background: rgba(211,211,211,0.7);">
  <script>
      document.write(date + " ");
      document.write(thismonth + " " + thisyear + " " + "года" + " — " + DayofWeek);
  </script>
  (<span id="clockdat" style="color:black;"></span>)
  </span>
</div>


<script>
    var date = new Date(),
        hours = date.getHours(),
        minutes = date.getMinutes(),
        seconds = date.getSeconds();

    if (hours > 12) {
        hours -= 12;
    }

    var secondsStartDegree = 360 / 60 * seconds,
        minutesStartDegree = 360 / 60 * minutes + 6 / 60 * seconds,
        hoursStartDegree = 360 / 12 * hours + 30 / 60 * minutes + 0.5 / 60 * seconds;

    var style = document.createElement('style');

    style.type = 'text/css';
    style.innerHTML = '\
        @keyframes clock-hand-rotate--hour {\
            from {transform: rotate(' + hoursStartDegree + 'deg)}\
            to {transform: rotate(' + (hoursStartDegree + 360) + 'deg)}\
        }\
        @keyframes clock-hand-rotate--minute {\
            from {transform: rotate(' + minutesStartDegree + 'deg)}\
            to {transform: rotate(' + (minutesStartDegree + 360) + 'deg)}\
        }\
        @keyframes clock-hand-rotate--second {\
            from {transform: rotate(' + secondsStartDegree + 'deg)}\
            to {transform: rotate(' + (secondsStartDegree + 360) + 'deg)}\
        }\
        .clock__hand--hour {\
            animation: clock-hand-rotate--hour 43200s linear infinite;\
        }\
        .clock__hand--minute {\
            animation: clock-hand-rotate--minute 3600s linear infinite;\
        }\
        .clock__hand--second {\
            animation: clock-hand-rotate--second 60s linear infinite;\
        }';

    document.getElementsByTagName('head')[0].appendChild(style);
</script>


<div class="container" style="margin-top: 10%; display: grid; align-content: center">

    <table class="reminders">
        <thead>
        <tr>
            <td rowspan="2" valign="top">Буду благодарен конструктивной критике или искренней эмоции</td>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>
                <form action="http://study/planner/script/save_script.php" method="post">
                <textarea
                        style="height: 100px; width: 100%; text-align: center; overflow: scroll; background-color: rgba(211, 211, 211, 0.8);"
                        name="form_opinion" placeholder="Ввод текста - плюс в карму :)
Интересуют сильные и слабые стороны проекта.
Я учту ваше замечание, делая проект лучше. "></textarea>
            </td>
        </tr>
        </tbody>
    </table>
    <div>
        <button type="button" class="btn btn-light container my-1"style="display: grid;width: auto; align-content: center">
            <input type="text" name="login_opinion" placeholder="ваше имя или ник (любой)"/></button>
        <input type="submit" class="btn btn-light container" style="display: grid;width: 140px; align-content: center"
               name="opinion_submitted" value="Отправить"/>
    </div>
    </form>

</div>


</body>
</html>
