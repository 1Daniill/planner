<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale=1.0">
    <title>Настройки</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
            integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
            crossorigin="anonymous"></script>


    <link rel="stylesheet" href="http://study/planner/main_css.css" type="text/css">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">


    <style>
        td {
            width: 50%;
        }
    </style>


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
                    <a class="nav-link active" href="http://study/planner/page4-settings.php">Настройки</a>
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


<div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 my-2">


        <div class="col " style="display: grid  ;align-content: center; ">
            <form action="http://study/planner/script/save_script.php" method="post">
            <table style="margin-top: -3% ">
                <thead>
                <tr>
                    <td rowspan="2" valign="top" style="color: rgb(112,108,108);font-size:14px;text-align: center; ">
                        Настройки распорядка дня
                    </td>
                </tr>
                </thead>
                <tbody style="text-align: center">
                <tr>
                    <td><input type="time" name="timeThisDay1" value="07:30"> - <input type="text" name="textThisDay1"
                                                                   placeholder="подъём, зарядка, душ"/></td>
                </tr>
                <tr>
                    <td><input type="time" name="timeThisDay2"  value="08:00"> - <input type="text" name="textThisDay2"
                                                                   placeholder="завтрак, уборка"/></td>
                </tr>
                <tr>
                    <td><input type="time" name="timeThisDay3" value="09:00"> - <input type="text" name="textThisDay3" placeholder="работа"/></td>
                </tr>
                <tr>
                    <td><input type="time" name="timeThisDay4" value="13:00"> - <input type="text" name="textThisDay4" placeholder="обед"/></td>
                </tr>

                <tr>
                    <td><input type="time" name="timeThisDay5" value="15:00"> - <input type="text" name="textThisDay5" placeholder="работа"/></td>
                </tr>
                <tr>
                    <td><input type="time" name="timeThisDay6" value="19:00"> - <input type="text" name="textThisDay6"
                                                                   placeholder="зал / библиотека"/></td>
                </tr>
                <tr>
                    <td><input type="time" name="timeThisDay7" value="20:30"> - <input type="text" name="textThisDay7"
                                                                   placeholder="ужин, личное время"/></td>
                </tr>
                <tr>
                    <td><input type="time" name="timeThisDay8" value="23:00"> - <input type="text" name="textThisDay8" placeholder="сон"/></td>
                </tr>
                <tr>
                    <td>
                        <button type="button" class="btn btn-light">Добавить значение</button>
                        <input type="submit"  class="btn btn-light" name="timeThisDay_submitted" value="Сохранить"/></td>
                    </td>
                </tr>
                </tbody>
            </table>

            </form>




            <div class="my-2" style="display: grid  ;align-content: center; ">
                <form action="http://study/planner/script/save_script.php" method="post">
                    <table style="width: 60%">
                        <thead>
                        <tr>
                            <td rowspan="2" valign="top"
                                style="color: rgb(112,108,108);font-size:14px;text-align: center; ">
                                Настройки ежедневных задач
                            </td>
                        </tr>
                        </thead>
                        <tbody style="text-align: center">
                        <tr>
                            <td><input type="text" name="everyday_task1" placeholder="Утром 1. пресс качат "/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="everyday_task2" placeholder="т) бегит"/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="everyday_task3" placeholder="книга читат"/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="everyday_task4" placeholder="анжумания"/></td>
                        </tr>

                        <tr>
                            <td><input type="text" name="everyday_task5" placeholder="вода пит"/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="everyday_task6" placeholder="английський учит"/></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" name="everyday_task_submitted" value="Сохранить"/>
                                <!--<input type="submit" name="everyday_task_add" value="Добавить"/>
                                <input type="submit" name="everyday_task_delete" value="Удалить"/>-->

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>



        <div class="my-3">


            <form  action="http://study/planner/page2-main.php" method="post"/>

            <table>
                <thead>
                <tr>
                    <td rowspan="2" valign="top"
                        style="color: rgb(112,108,108);font-size:14px;text-align: center; ">
                        Настройки видимости
                    </td>
                </tr>
                </thead>
                <tbody style="text-align: left">
                <tr>
                    <td><input type="checkbox" name="view_main_real_time"/> Убрать блок времени</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="view_main_calendar"/> Убрать блок календаря</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="view_clock"/> Убрать блок циферблатов</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="view_count"/> Убрать блок отсчёта дней</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="view_everyday_task"/> Убрать блок ежедневных испытаний</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="view_main_task"/> Убрать блок целей</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="view_reminder"/> Убрать блок заметок</td>
                </tr>


                </tbody>


            </table>


                <input style="width: 40%; margin-left: 30%" type="submit" name="formSubmit" value="Сохранить настройки видимости"/>


            </form>

            <form action="http://study/planner/script/save_script.php" method="post">
                <table class="main-task my-3">

                    <thead>
                    <tr>
                        <td rowspan="2" style="color: rgb(112,108,108);font-size:14px; ">
                            <div class="container"
                            ">
                            <input type="submit" name="year_task_submitted" value="Сохранить задачу на год"/>
        </div>
        </td>
        <td style="color: rgb(112,108,108);font-size:14px; "><input type="submit" name="quarter_task_submitted"
                                                                    value="Сохранить задачу на квартал"/></td>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>
                            <textarea
                                    style="height: 100px; width: 100%; text-align: center; padding-top: 30px; background-color: rgba(211, 211, 211, 0.7);color: black;"
                                    name="task_year"
                                    placeholder="Долгосрочная задача"></textarea>

            </td>
            <td><textarea
                        style="height: 100px; width: 100%; text-align: center; padding-top: 30px; background-color: rgba(211, 211, 211, 0.7);"
                        name="task_quarter"
                        placeholder="Среднесрочная задача"></textarea>
            </td>
        </tr>
        </tbody>


        <tfoot>
        <tr>
            <td valign="bottom"><span style="color: rgb(112,108,108);font-size:14px; "><input type="submit"
                                                                                              name="month_task_submitted"
                                                                                              value="Сохранить задачу на месяц"/></span>
            </td>
            <td valign="bottom"><span style="color: rgb(112,108,108);font-size:14px; "><input type="submit"
                                                                                              name="week_task_submitted"
                                                                                              value="Сохранить задачу на неделю"/></span>
            </td>
        </tr>
        </tfoot>

        <tbody>
        <tr>
            <td rowspan="2"><textarea
                        style="height: 100px; width: 100%; text-align: center; padding-top: 30px; background-color: rgba(211, 211, 211, 0.7);"
                        name="task_month"
                        placeholder="Краткосрочная задача"></textarea>
            </td>
            <td><textarea
                        style="height: 100px; width: 100%; text-align: center; padding-top: 30px; background-color: rgba(211, 211, 211, 0.7);"
                        name="task_week"
                        placeholder="Текущие задачи"></textarea></td>
        </tr>
        </tbody>
        </table>
        </form>
        <div class="container my-1" style="display: grid; align-content: center; width: 350px">
            <form action="http://study/planner/script/save_script.php" method="post">
                <table>
                    <thead>
                    <tr>
                        <td rowspan="2" valign="top"
                            style="color: rgb(112,108,108);font-size:14px;text-align: center; ">
                            Настройка счётчика дней
                        </td>
                    </tr>
                    </thead>
                    <tbody style="text-align: center">
                    <tr>
                        <td><input type="text" style="text-align: center" name="days_without_name"
                                   placeholder="Дней без сигарет"/></td>
                    </tr>

                    <tr>
                        <td><input type="number" style="width: 50px; text-align: center" value="1"
                                   name="days_without_count">
                            <input type="submit" name="number_submitted" value="Сохранить"/></td>
                    </tr>


                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>
</div>
</div>


<?php

//var_dump($USER);
var_dump($SESSION);
?>


<div class="container col-lg-7 col-md-8 col-sm-12 mx-auto" style="text-align: center">
    <a href="http://study/planner/page5-comment.php">
        <button class="btn btn-light" style="background-color: rgba(211,211,211,0.7)">Оставить комментарий
            разработчику
        </button>
    </a>

    <a href="https://t.me/daniil_lukin">
        <button class="btn"><img style="width: 35px" src="http://study/planner/pngegg%20(1).png" alt="Телеграм">
        </button>
    </a>

    <a href="https://www.instagram.com/daniil__lukin/">
        <button class="btn"><img style="width: 35px" src="http://study/planner/pngegg.png" alt="Инстаграм"></button>
    </a>
</div>

</body>
</html>
