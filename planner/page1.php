<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale=1.0">
    <title>Приветственная страница</title>



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

    <style>
        .rounded-img {
            width: 42%;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 2);
            padding: 0.15em;
        }

        .text-1 {
            color: #000000;
            font-weight: 600;

            opacity: 0.6;
            background: rgba(248, 248, 248, 0.9);
            padding: 0.1px;
        }

        .text-heavy {
            font-weight: 650;
        }


        .color-inst {
            background: #ea63de;

        }


        BODY {
            background: url(http://study/planner/back-light.jpg) fixed;
            background-size: 100%;
        }
    </style>
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
                    <a class="nav-link active" aria-current="page" href="http://study/planner/page1.php">Знакомство</a>
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

<div class="container text-center my-2">
    <div class="row">
        <div class="col-lg-7 col-md-8 col-sm-12 mx-auto">

            <img class="rounded-img" src="http://study/planner/Daniil%20Lukin.jpg" alt="Daniil Lukin">
            <h3><span class="text-1"> Добро пожаловать в ежедневник. </span></h3>

            <p> <span class="lead text-1 radius" style="font-size: 1.21rem;">Чтобы не тратить время в пустую нужен его контроль. <br>Лучший вид
                    контроля - наглядный. Много лет я носил аналоговые ежедневники, придумав их удобными под
                    себя
                    лично. Каждый вечер приходилось расчерчивать структуру, прописывать
                    повторяющиеся блоки, выделять место в сумке. Я принял решение перенести свой ежедневник из
                    аналогового формата в цифровой.
                    Буду рад, если вы найдете его полезным и для <span class="text-heavy">себя</span>. </span></p>
            <a href="http://study/planner/page2-main.php">
                <button class="btn btn-success">Поехали!</button>
            </a>

            <p></p>
            <a href="https://t.me/daniil_lukin">
                <button class="btn"><img style="width: 40px" src="http://study/planner/pngegg%20(1).png" alt="">
                </button>
            </a>
            <a href="https://www.instagram.com/daniil__lukin/">
                <button class="btn"><img style="width: 40px" src="http://study/planner/pngegg.png" alt=""></button>
            </a>

        </div>
    </div>
</div>




</body>
</html>

