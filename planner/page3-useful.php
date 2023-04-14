<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale=1.0">
    <title>Полезное</title>
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
                    <a class="nav-link active" aria-current="page"  href="http://study/planner/page3-useful.php">Полезное</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="http://study/planner/page4-settings.php">Настройки</a>
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


<div class="container" style="font-size: 0.9rem;">
    <p style="margin-left: 2%"><span class="lead text-standart">В этом разделе хранится перечень рекомендаций, помогающих верно распределить своё время </span>
    </p>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 my-2">
        <div class="col my-1 ">
            <div class="card" style="width: 300px; background-color: rgba(255,255,255,0.7);">
                <img src="http://study/planner/card1.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Зачем?</h5>
                    <p class="card-text">...нужен ежедневник.</p>
                    <div class="container">
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button"
                               aria-expanded="false" aria-controls="collapseExample"
                               style="display: grid; align-content: center">
                                Читать
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                    aria-expanded="false" aria-controls="flush-collapseOne">
                                                Время
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                             aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Почему важно отслеживать своё время? Если
                                                коротко, то потому что оно конечно.
                                                <br>
                                                <br>Статистически средняя продолжительность жизни 70 лет. Последние 10
                                                лет
                                                не думаю, что вы и я будем активны. Если вам, как и мне, 30 лет, то
                                                осталось ещё
                                                30. Треть суток сон - 10 лет. Треть суток работа - ещё
                                                10 лет. На личное остаётся всего десять лет на всю оставшуюся жизнь.
                                                <br>
                                                <br>
                                                <br>Здесь нет места для больших и длинных объяснений. Впрочем, если эти
                                                цифры вас не впечатлили, объяснения ни к чему. <br>
                                                <br> <a class="dropdown-item"
                                                        href="http://study/planner/calendar-week.jpg"
                                                        style="color: blue">Сказанное выше, наглядно.</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                    aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Дело
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                             aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">19 летний балбес и
                                                молодой отец(возможно тоже 19 летний), успевают сделать в день абсолютно
                                                разное количество
                                                дел. Почему так? Молодой отец умеет раздвигать пространство и
                                                время? Молодой отец умеет многое, но,к сожалению, не это. В сутках 24
                                                часа для всех. Причина в разном количестве поставленных задач. <br>
                                                <br>Ежедневник помогает ставить задачи, структурировать их и следить за
                                                последовательным выполнением; реализуя время с пользой, а не как получится.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                                Место
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                                             aria-labelledby="flush-headingThree"
                                             data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Всё просто - заранее планируя список дел, проще
                                                понять в какой последовательности их выполнять. Как по времени, так и по
                                                местоположению.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col my-1">
            <div class="card" style="width: 300px; background-color: rgba(255,255,255,0.7);">
                <img src="http://study/planner/card4.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Почему?</h5>
                    <p class="card-text">...важно следить за прогрессом.</p>
                    <div class="container">
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExampl" role="button"
                               aria-expanded="false" aria-controls="collapseExample"
                               style="display: grid; align-content: center">
                                Читать
                            </a>
                        </p>
                        <div class="collapse" id="collapseExampl">
                            <div class="card card-body"><p>Представим, что у вас идеальная память, и вам не нужно ничего
                                    напоминать. Даже в этом случае, списки будут вам полезны. <br>

                                    <br>Во-первых, они помогают думать. <a
                                            href="https://www.nature.com/articles/ncomms6768"> Исследование </a>,
                                    опубликованное в Nature,
                                    показало, что думать о нескольких вещах одновременно – это верный способ смешать всё
                                    в
                                    одну кучу и половину забыть. Сам процесс учёные сравнивают с жонглированием — чем
                                    больше
                                    предметов, тем сложнее их контролировать. Списки разгружают сознание. <br>

                                    <br>Поскольку объём рабочей памяти ограничен, забивая свою голову списком
                                    продуктов, крошечными делами и прочими мелочами, вы
                                    не даёте созреть уже гораздо более важным и глубоким размышлениям. Словом, сохраняя
                                    мысли на бумаге, вы не просто освобождаете голову для новых идей, но и повышаете их
                                    интеллектуальный вес. <br>

                                    <br>Во-вторых, список помогает вам быть счастливым. В 2011 году по результатам <a
                                            href="https://drrobertepstein.com/downloads/Epstein-Fight_the_Frazzled_Mind-SCIENTIFIC_AMERICAN_MIND-Sept_Oct_2011-pp30-35.pdf">опроса</a>,
                                    психолог Роберт Эпштейн выяснил, что те, кто планирует свои дела, <a
                                            href="https://mystressmanagementskills.com/">справляются </a> со
                                    стрессом лучше тех, кто этого не делает. <br>

                                    <br>Происходит это из-за <a href="https://ru.wikipedia.org/wiki/Эффект_Зейгарник">эффекта
                                        Зейгарник</a>. Он гласит, что человек лучше всего помнит то,
                                    что недоделал. Незавершённые дела висят в воздухе, угнетая повседневную жизнь.
                                    Наверняка вам знакомо, как нерешённые проблемы могут порой отвлекать и давить на
                                    голову.
                                    <br>

                                    <br>Так вот, <a
                                            href="http://users.wfu.edu/masicaej/MasicampoBaumeister2011JPSP.pdf">эксперимент</a>
                                    2011 года показал, что этого можно избежать, если просто составить
                                    список незавершённых дел. Так вы избавите себя от стресса не только сейчас, но и в
                                    будущем, когда примитесь доводить дело до конца, ведь инструкция уже готова. <br>

                                    <br>В-третьих, список помогает планировать. Большинство людей держит планы в голове,
                                    однако,
                                    как мы уже выяснили, это не лучший подход. Вы держите в уме не только сами дела, но
                                    и их
                                    последовательность и время их выполнения. Нося всё это в голове, вы ограбляете
                                    собственную эффективность. <br>

                                    <br>Другое дело письменный план, который из любой задачи, даже чертовски сложной,
                                    поможет
                                    выстроить чёткую и понятную структуру, превращая клубок спутанных мыслей в готовую
                                    инструкцию. Бери и делай. Если вы, как и большинство, будете держать всё это в уме,
                                    то у
                                    вас, как и у большинства, на
                                    более серьёзные размышления просто не хватит ресурсов. <br>

                                    <br>Таким образом, список — это не просто одноразовая напоминалка. Это мощнейший
                                    инструмент, позволяющий отслеживать прогресс и выполнение поставленных задач.
                                    Который
                                    из-за своей очевидности и простоты кажется необязательным. Не позволяйте первому
                                    впечатлению вас обмануть.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col my-1">
            <div class="card" style="width: 300px; background-color: rgba(255,255,255,0.7);">
                <img src="http://study/planner/card3.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Сколько?</h5>
                    <p class="card-text">...задач реально выполнять в день.</p>
                    <div class="container"><p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExamp" role="button"
                               aria-expanded="false" aria-controls="collapseExample"
                               style="display: grid; align-content: center">
                                Читать
                            </a>
                        </p>
                        <div class="collapse" id="collapseExamp">
                            <div class="card card-body"><p>Если мы говорим не о задачах порядка "Проснулся - уже
                                    молодец",
                                    то без выгорания на длинную дистанцию реально
                                    ставить и выполнять в среднем по три задачи в день. <br>

                                    <br>Работать продуктивно не значит работать много. Например, японский филиал
                                    Майкрософт
                                    на месяц <a
                                            href="https://edition.cnn.com/2019/11/04/tech/microsoft-japan-workweek-productivity/index.html">ввёл
                                        четырёхдневную рабочую неделю</a>, но несмотря на то, что работники стали
                                    больше отдыхать, продуктивность не только не упала, но и вырастала на 40%. То есть
                                    правильный отдых делает нас сильнее. Это подтверждается и <a
                                            href="https://www.researchgate.net/publication/254897932_How_do_vacations_affect_workers'_health_and_well-being_Vacation_after-_effects_and_the_role_of_vacation_activities_and_experiences">данными</a>
                                    голландских учёных,
                                    неделя отдыха значительно улучшает состояние работников на следующей, уже рабочей
                                    неделе. <br>

                                    <br>Следует учитывать, когда вы планируете отдых, это регулярность. Согласно
                                    <a href="https://academic.oup.com/sleep/article/5/4/311/2753285?login=false">исследованию</a>
                                    биологических ритмов, перерыв на 20–30 минут нужно делать каждые 1,5–2
                                    часа. <br>

                                    <br>Важно понимать, что в отличие от мышц, которые болят от усталости, мозг устаёт
                                    молча. Поэтому умственную перегрузку легко не заметить.


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card my-1" style="width: 300px; background-color: rgba(255,255,255,0.7);">
                <img src="http://study/planner/card2.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Как?</h5>
                    <p class="card-text">...не сбиться с плана. </p>
                    <div class="container"><p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseEr" role="button"
                               aria-expanded="false" aria-controls="collapseExample"
                               style="display: grid; align-content: center">
                                Читать
                            </a>
                        </p>
                        <div class="collapse" id="collapseEr">
                            <div class="card card-body"><p>Я не верю в мотивацию, она краткосрочна и капризна. <br>
                                    Я верю в дисциплину. <br>

                                    <br>Существует фундаментальная разница в мировоззрении дисциплинированного человека
                                    и
                                    остальных.
                                    Большая часть людей старается получать удовольствие от процесса, избегая напряжения.
                                    Дисциплинированный человек получает удовольствие от результата, ради которого он
                                    готов
                                    трудиться. Для него очевидно, что ради резульатата необходимо засучить рукава и
                                    вовсе не обязательно это будет приятно, но результат приятным будет точно. <br>

                                    <br>Поняв эту простую истину мотивация больше не нужна.


                                </p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container my-5" style="font-size: 0.9rem;">
    <p style="margin-left: 2%"><span class="lead text-standart">В этом разделе хранится полезная общая информация, которая помогала мне не
    раз. <br>Делюсь ею в надежде, что она сослужит добрую службу и вам.</span>
    </p>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 my-2">
        <div class="col my-1">
            <div class="card" style="width: 300px; background-color: rgba(255,255,255,0.7);">
                <img src="http://study/planner/card6.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Повысить</h5>
                    <p class="card-text">...дофамин в крови</p>
                    <div class="container"><p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseEx" role="button"
                               aria-expanded="false" aria-controls="collapseExample"
                               style="display: grid; align-content: center">
                                Читать
                            </a>
                        </p>
                        <div class="collapse" id="collapseEx">
                            <div class="card card-body"><p>Нет, речь не про 12 летний вискарь. И не про женщин в
                                    купальниках.
                                    Хотя такой опыт у меня тоже есть и я его вам крайне рекомендую, но сейчас не
                                    об этом.<br>
                                    <br> Повысить дофамин в крови до уровня, сопоставимого с употреблением кокаина, (без
                                    употребления кокаина) можно с помощью холодной воды. <br>
                                    <br>Неожиданно? Разбираемся. <br>

                                    <br>
                                    При воздействии на тело холодных температур в кровь выбрасывается <a
                                            href="https://pubmed.ncbi.nlm.nih.gov/17993252/">норадреналин</a>
                                    (+ когнитивные функции, бдительность, внимание, сосредоточенность, настроение). При
                                    погружении в холодную воду, равную 14 градусам, на час наблюдалось увеличение
                                    норадреналина и дофамина <a
                                            href="https://link.springer.com/article/10.1007/s004210050065">на 530% и
                                        250%
                                        соответственно</a>, метаболизм на 350%.
                                    <br>
                                    <br>Ещё одним важным преимуществом является уменьшение воспалительных процессов во
                                    всём
                                    теле.
                                    По данным Гарвардской медицинской школы хронические воспаления напрямую связаны <a
                                            href="https://www.health.harvard.edu/staying-healthy/understanding-acute-and-chronic-inflammation">
                                        с диабетом, раком, артритом и др</a>. <br>

                                    <br>Холодная вода станет причиной простудных заболеваний, подсказывает нам здравый
                                    смысл, подсказывает и...ошибается. Очередным положительным эффектом является
                                    повышение
                                    иммунитета.
                                    <a href="https://www.mdpi.com/1660-4601/17/23/8984">Доказано 40%
                                        (!!!)</a> уменьшение частоты инфекционных заболеваний верхних дыхательных путей
                                    у
                                    зимних пловцов. В крови значительно повышается уровень лимфоцитов и моноцитов. <br>

                                    <br>Помимо вышеперечисленного есть прямые доказательства полной замены
                                    медикаментозного
                                    лечения
                                    депрессии регулярным воздействием холодных температур.


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col">
            <div class="card my-1" style="width: 300px; background-color: rgba(255,255,255,0.7);">
                <img src="http://study/planner/card8.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Натуральный</h5>
                    <p class="card-text">...допинг</p>
                    <div class="container"><p>
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample2" role="button"
                               aria-expanded="false" aria-controls="collapseExample"
                               style="display: grid; align-content: center">
                                Читать
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample2">
                            <div class="card card-body">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                    aria-expanded="false" aria-controls="flush-collapseOne">
                                                Гвоздика
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                             aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Первая природно-полезная, дешевая и доступная
                                                добавка это популярная пряность - сушеные бутоны гвоздичного дерева.
                                                <br> К полезным свойствам относятся:
                                                <br>1. бактерицидное
                                                <br>2. антиканцерогенное
                                                <br>3. ранозаживляющее
                                                <br>4. обезболивающее
                                                <br>5. спазмолитическое
                                                <br>6. противогрибковое (фунгицидное)
                                                <br>7. ветрогонное (при метеоризме)
                                                <br>8. антигельминтное (глистогонное)
                                                <br>
                                                <br>В состав входят:
                                                <br>Тиамин
                                                <br>Селен
                                                <br>Кальций,медь, марганец
                                                <br>Цинк, фосфор, железо
                                                <br>
                                                <br>Рассасывать и жевать натощак, 1-2 бутона достаточно.
                                                <br>С осторожностью, при наличии язвы желудка или кишечника, гастрита;
                                                повышенном давлении.
                                                <br>
                                                <br><a class="dropdown-item"
                                                       href="https://fdc.nal.usda.gov/fdc-app.html#/food-details/171321/nutrients"
                                                       style="color: blue">Доказательства</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                    aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Лавровый лист
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                             aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Вторая природно-полезная, дешевая и доступная
                                                добавка это популярная пряность - сушеный лавровый лист.
                                                <br> К полезным свойствам относятся:
                                                <br>-противовоспалительное
                                                <br>-противораковое
                                                <br>-антивирусное
                                                <br>-антимикробное
                                                <br>-обезболивающее
                                                <br>
                                                <br>В состав входят:
                                                <br>Витамины А,С,В6,В9
                                                <br>Кальций, железо
                                                <br>Медь, марганец
                                                <br>Фосфор, цинк
                                                <br>Селен
                                                <br>
                                                <br><a class="dropdown-item"
                                                       href="https://fdc.nal.usda.gov/fdc-app.html#/food-details/170917/nutrients"
                                                       style="color: blue">Доказательства</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                                Чеснок
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                                             aria-labelledby="flush-headingThree"
                                             data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body"> Чеснок является тяжёлой ветераном
                                                среди полезных продуктов. Существуют записи, дошедшие до нашего
                                                времени,что в древней Индии ещё до нашей эры использовали чеснок для
                                                борьбы с целым рядом болезней и недугов.
                                                <br>
                                                <br> К полезным свойствам относятся:
                                                <br>Регуляция кровяного тока, продуцирование ферментов крови,
                                                обезвреживание токсических веществ, улучшение работы ЖКТ и многое
                                                другое, касающееся сердечно-сосудистой системы, усвоения жиров и борьбы
                                                с
                                                паразитами. Алицин - ключевой элемент чеснока -
                                                стоит на страже здоровья более 2000 лет и это только
                                                доказанный временной промежуток.
                                                <br>
                                                <br>Употреблять нужно строго без термической обработки. При увеличении
                                                температуры алицин из продукта исчезает.
                                                <br>
                                                <br><a class="dropdown-item"
                                                       href="https://fdc.nal.usda.gov/fdc-app.html#/food-details/170917/nutrients"
                                                       style="color: blue">Доказательства</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col my-1">
            <div class="card" style="width: 300px; background-color: rgba(255,255,255,0.7);">
                <img src="http://study/planner/card5.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Понизить</h5>
                    <p class="card-text">...гормон стресса</p>
                    <div class="container"><p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseE" role="button"
                               aria-expanded="false" aria-controls="collapseExample"
                               style="display: grid; align-content: center">
                                Читать
                            </a>
                        </p>
                        <div class="collapse" id="collapseE">
                            <div class="card card-body"><p> Кортизол - гормон стресса - эволютивно один из механизмов
                                    выживания. Он улучшает кратковременную память, активизирует нервную систему,
                                    обостряет
                                    чувства человека.
                                    <br>
                                    <br>Однако хронически-высокий уровень кортизола это серьезный враг здоровья, он
                                    имеет
                                    обратный
                                    эффект - разрушает гиппокамп, как следствие провалы в памяти, спутанность сознания,
                                    потеря
                                    концентрации внимания. Увеличивается риск заболеваний сердечно-сосудистой системы,
                                    снижается иммунитет, теряются минералы(калий) и витамины(тиамин).
                                    <br>

                                    <br>Для снижения кортизола полезно будет заняться физической работой - в зале с
                                    гантелей
                                    или на
                                    природе с лопатой. Помимо улучшения кровообращения нагрузка улучшит сон, что поможет
                                    надпочечникам восстановить уровень кортизола. <br>

                                    <br>Увеличить потребление витамина B1, D3, магния, калия. Медикаментозно или с
                                    помощью
                                    зелёно-красно-жёлтых штук, называемых овощами.
                                    <br>

                                    <br>


                                    Естественным путём моментально понизить гормон стресса можно с
                                    помощью дыхания.
                                    Этому мы можем поучиться у маленьких детей, их поведение гораздо более подвержено
                                    инстинктам, чем осознанным действиям.
                                    Если обратить внимание на ребенка когда он плачет, можно заметить как он
                                    делает глубокие вдохи, а потом довдыхает.
                                    Доказано, что наполняя кислородом лёгкие, а после довдыхая, мы с выдохом избавляемся
                                    от
                                    всего углекислого газа, что значительно понижает уровень кортизола в крови.<br>
                                    <br>Доказательства:
                                    <a class="dropdown-item"
                                       href="https://www.health.harvard.edu/mind-and-mood/relaxation-techniques-breath-control-helps-quell-errant-stress-response"
                                       style="color: blue">-расслабление</a>
                                    <a class="dropdown-item"
                                       href="https://pubmed.ncbi.nlm.nih.gov/8063359/"
                                       style="color: blue">-влияет на нервную систему</a>
                                    <a class="dropdown-item"
                                       href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3276936/"
                                       style="color: blue">-сердечный ритм</a>
                                    <a class="dropdown-item"
                                       href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4247229/"
                                       style="color: blue">-кровеносное давление</a>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col my-1">
            <div class="card" style="width: 300px; background-color: rgba(255,255,255,0.7);">
                <img src="http://study/planner/blind.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Бороться</h5>
                    <p class="card-text">...со слепотой </p>
                    <div class="container"><p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExa" role="button"
                               aria-expanded="false" aria-controls="collapseExample"
                               style="display: grid; align-content: center">
                                Читать
                            </a>
                        </p>
                        <div class="collapse" id="collapseExa">
                            <div class="card card-body"><p>Я, как человек, разок глаза уже успешно пролюбивший и шесть
                                    лет
                                    назад сделавший операцию по их восстановлению, очень сильно ценю остроту зрения и
                                    возможность видеть и узнавать любых персонажей издалека. <br>

                                    <br>Начнём с перечня продуктов, которые улучшают зрение: <a
                                            href="https://www.aao.org/eye-health/diseases/vitamin-deficiency">морковь</a>,
                                    черника, брокколи, шпинат, укроп, петрушка, листья салата, фундук, миндаль, грецкий
                                    орех, рыба. В целом крайне важны витамины: А, B1, B2, B12, C, E. <br>

                                    <br>Основная проблема взаимодействия глаз и мониторов не в излучении, а в том, что,
                                    смотря в экран, мы моргаем в три раза реже - это приводит к синдрому сухого глаза.
                                    Решение
                                    следующее, во-первых привить привычку моргать за монитором, во-вторых раз час
                                    вставать и
                                    2-3 минуты смотреть в даль. <br>

                                    <br>Тема обширная и важная, <a href="https://www.youtube.com/watch?v=P40ayiJDXB4">рекомендую
                                        для ознакомления интересную беседу.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
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
