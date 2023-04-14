<?php
session_start();
require_once "script/get_script.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale=1.0">
    <title>Ежедневник</title>


    <link rel="stylesheet" href="http://study/planner/main_css.css" type="text/css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
            integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cookiesjs/1.4.2/cookies.min.js"></script>



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
                    <a class="nav-link active" aria-current="page"
                       href="http://study/planner/page2-main.php">Главная</a>
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
            <li><a class="dropdown-item" href="http://study/planner/page5-comment.php">Оставить комментарий
                    разработчику</a>
            </li>
        </ul>
    </div>
</nav>

<?php
if (isset($_POST['view_main_real_time'])) {
    $block_time = true;
}

if ($block_time == true): ?>


<?php else: ?>

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

<?php endif; ?>


<div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 my-4">


        <div class="col my-2">
            <?php
            if (isset($_POST['view_main_calendar'])) {
                $block_calendar = true;
            }

            if ($block_calendar == true): ?>


            <?php else: ?>


                <script src="https://cdnjs.cloudflare.com/ajax/libs/cookiesjs/1.4.2/cookies.min.js"></script>
                <table id="calendar1">
                    <thead>
                    <tr>
                        <td colspan="4">
                        <td colspan="3">
                    <tr>
                        <td>Пн
                        <td>Вт
                        <td>Ср
                        <td>Чт
                        <td>Пт
                        <td>Сб
                        <td>Вс
                    <tbody class="cd">
                </table>
                <script src="jsScript/calendar.js"></script>

            <?php endif; ?>
        </div>




        <div class="col my-2">



            <?php
            if (isset($_POST['view_clock'])) {
                $block_clock = true;
            }
            if ($block_clock == true): ?>

            <?php else: ?>
                        <div class="clock first_clo" style="float: left; width: 50%;">
                            <img class="rounded-img" src="http://study/planner/watch%20am.png" alt="watch am">
                            <div class="hour">
                                <div class="hr1" id="hr1"></div>
                            </div>
                            <div class="min">
                                <div class="mn1" id="mn1"></div>
                            </div>
                            <div class="sec">
                                <div class="sc1" id="sc1"></div>
                            </div>
                        </div>


                        <div class="clock second_clo" style="float: right; width: 50%;">
                            <img class="rounded-img" src="http://study/planner/watch%20pm.png" alt="watch pm">

                            <div class="hour">
                                <div class="hr2" id="hr2"></div>
                            </div>
                            <div class="min">
                                <div class="mn2" id="mn2"></div>
                            </div>
                            <div class="sec">
                                <div class="sc2" id="sc2"></div>
                            </div>
                        </div>

                <script src="jsScript/watchesJS.js"></script>
            <?php endif; ?>
        </div>


        <div class="col count my-2">
            <?php
            if (isset($_POST['view_count'])) {
                $block_count = true;
            }

            if ($block_count == true): ?>

            <?php else: ?>

                <div>
                    <form action="http://study/planner/script/save_script.php" method="post"
                          style="background: rgba(211,211,211,0.7); width: 150px; color: black"
                    <button type="submit" name="" class="btn btn-outline-danger row"> <?php echo get_count_name(); ?>
                        <span
                                style="color: red; background: rgba(211,211,211,0.7); border-radius: 10%"><?php echo get_count_day(); ?></span>
                    </button>
                    <br><input type="submit" name="plus_day" class="btn btn-outline-danger row"
                               style="height: fit-content; width: fit-content" value="+1"/>
                    </form>
                </div>

            <?php endif; ?>
        </div>

    </div>
</div>


<div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 my-5">
        <div class="col my-2">
            <?php
            if (isset($_POST['view_everyday_task'])) {
                $block_everyday_task = true;
            }

            if ($block_everyday_task == true): ?>

            <?php else: ?>

                <style>
                    .Before_checked {

                        background: rgba(253, 228, 3, 0.4);
                        transition: .5s;
                    }

                    #ch1:checked ~ .Before_checked {
                        background: rgba(70, 253, 3, 0.4);
                    }

                    #ch2:checked ~ .Before_checked {
                        background: rgba(70, 253, 3, 0.4);
                    }

                    #ch3:checked ~ .Before_checked {
                        background: rgba(70, 253, 3, 0.4);
                    }

                    #ch4:checked ~ .Before_checked {
                        background: rgba(70, 253, 3, 0.4);
                    }

                    #ch5:checked ~ .Before_checked {
                        background: rgba(70, 253, 3, 0.4);
                    }

                    #ch6:checked ~ .Before_checked {
                        background: rgba(70, 253, 3, 0.4);
                    }
                </style>


                <div class="everyday-task"
                     style="background-color: rgba(211, 211, 211, 0.7); border: 4px double black; margin-left:  min-height: 90px;">
                    <thead>
                    <tr>
                        <td rowspan="2" valign="top"
                            style="color: rgb(112,108,108);font-size:14px;text-align: center; ">
                            Ежедневные испытания
                        </td>
                    </tr>
                    </thead>

                    <tbody>
                    <div id="ch" style="list-style-type: none " ;>
                        <tr>
                            <li><input type="checkbox" id="ch1"> <span
                                        class="Before_checked"> <?php echo get_task_everyday1(); ?> </span></li>
                        </tr>
                        <tr>
                            <li><input type="checkbox" id="ch2"> <span
                                        class="Before_checked">  <?php echo get_task_everyday2(); ?> </span></li>
                        </tr>
                        <tr>
                            <li><input type="checkbox" id="ch3"> <span
                                        class="Before_checked">  <?php echo get_task_everyday3(); ?> </span></li>
                        </tr>
                        <tr>
                            <li><input type="checkbox" id="ch4"> <span
                                        class="Before_checked">  <?php echo get_task_everyday4(); ?> </span></li>
                        </tr>
                        <tr>
                            <li><input type="checkbox" id="ch5"> <span
                                        class="Before_checked">  <?php echo get_task_everyday5(); ?> </span></li>
                        </tr>
                        <tr>
                            <li><input type="checkbox" id="ch6"> <span
                                        class="Before_checked">  <?php echo get_task_everyday6(); ?> </span></li>
                        </tr>
                    </div>
                    </tbody>
                </div>
                <script src="jsScript/saveCheckbox.js"></script>


            <?php endif; ?>
        </div>


        <div class="col my-2">

            <?php
            if (isset($_POST['view_main_task'])) {
                $block_main_task = true;
            }

            if ($block_main_task == true): ?>

            <?php else: ?>

                <table class="main-task">
                    <thead>
                    <tr>
                        <td rowspan="2" valign="top" style="color: rgb(112,108,108);font-size:14px; ">Задача на год</td>
                        <td valign="top" style="color: rgb(112,108,108);font-size:14px; ">Задача на квартал</td>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td> <?php echo get_task_year(); ?>  </td>
                        <td> <?php echo get_task_quarter(); ?> </td>
                    </tr>
                    </tbody>


                    <tfoot>
                    <tr>
                        <td valign="bottom"><span
                                    style="color: rgb(112,108,108);font-size:14px; ">Задача на месяц</span>
                        </td>
                        <td valign="bottom"><span
                                    style="color: rgb(112,108,108);font-size:14px; ">Задача на неделю</span>
                        </td>
                    </tr>
                    </tfoot>

                    <tbody>
                    <tr>
                        <td rowspan="2"> <?php echo get_task_month(); ?> </td>
                        <td> <?php echo get_task_week(); ?></td>
                    </tr>
                    </tbody>
                </table>

            <?php endif; ?>
        </div>

        <div class="col my-2">
            <?php
            if (isset($_POST['view_reminder'])) {
                $block_reminder = true;
            }

            if ($block_reminder == true): ?>

            <?php else: ?>

                <table class="reminders">
                    <thead>
                    <tr>
                        <td rowspan="2" valign="top">Заметки/напоминания</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <form action="http://study/planner/script/save_script.php" method="post"
                                  name="rem_text">
                            <textarea
                                    style="min-height: 100px ; width: 100%; text-align: center;  background-color: rgba(211, 211, 211, 0.5);color: red;"
                                    name="rem_text"
                                    placeholder=" Введите текст, чтобы вспомнить купить молоко и страж границы пустил домой."><?php echo get_reminder(); ?></textarea>

                                <input type="submit" name="rem_submitted" value="Готово"/></form>
                        </td>
                    </tr>
                    </tbody>
                </table>

            <?php endif; ?>
        </div>
    </div>
</div>

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




