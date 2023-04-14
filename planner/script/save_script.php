<?php
session_start();


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "1rusdaniil", "ovuvil2020", "myfirstdb");
if (mysqli_connect_errno()) {
    print("Ошибка: Невозможно подключиться к MySQL ('mysqli_connect_errno()'): " . mysqli_connect_error());
}

$rem = [
    'rem_text' => $_POST['rem_text'],
];

if (isset($_POST['rem_submitted'])) {
    $sql = "INSERT INTO reminder (rem_text) VALUES (?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $rem['rem_text']);
    $stmt->execute();
}

if (isset($_POST['rem_submitted'])) {
    header("Location: http://study/planner/page2-main.php");
    die();
}

$opin = [
    'login_opinion' => $_POST['login_opinion'],
    'form_opinion' => $_POST['form_opinion'],
];

if (isset($_POST['opinion_submitted'])) {
    $sql = "INSERT INTO opinion (username, opinion_text) VALUES (?,?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $opin['login_opinion'], $opin['form_opinion']);
    $stmt->execute();
}

if (isset($_POST['opinion_submitted'])) {
    header("Location: http://study/planner/page5-comment.php");
    die();
}


/* Задачи на перспективу*/

$task1year = [
    'task_year' => $_POST['task_year'],
];

if (isset($_POST['year_task_submitted'])) {
    $sql = "INSERT INTO task_year (task1) VALUES (?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $task1year['task_year']);
    $stmt->execute();
}

if (isset($_POST['year_task_submitted'])) {
    header("Location: http://study/planner/page4-settings.php");
    die();
}


$task1quarter = [
    'task_quarter' => $_POST['task_quarter'],
];

if (isset($_POST['quarter_task_submitted'])) {
    $sql = "INSERT INTO task_quarter (task2) VALUES (?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $task1quarter['task_quarter']);
    $stmt->execute();
}

if (isset($_POST['quarter_task_submitted'])) {
    header("Location: http://study/planner/page4-settings.php");
    die();
}


$task1month = [
    'task_month' => $_POST['task_month'],
];

if (isset($_POST['month_task_submitted'])) {
    $sql = "INSERT INTO task_month (task3) VALUES (?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $task1month['task_month']);
    $stmt->execute();
}

if (isset($_POST['month_task_submitted'])) {
    header("Location: http://study/planner/page4-settings.php");
    die();
}


$task1week = [
    'task_week' => $_POST['task_week'],
];

if (isset($_POST['week_task_submitted'])) {
    $sql = "INSERT INTO task_week (task4) VALUES (?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $task1week['task_week']);
    $stmt->execute();
}

if (isset($_POST['week_task_submitted'])) {
    header("Location: http://study/planner/page4-settings.php");
    die();
}


$count_day = [
    'days_without_name' => $_POST['days_without_name'],
    'days_without_count' => $_POST['days_without_count'],
];

if (isset($_POST['number_submitted'])) {
    $sql = "INSERT INTO count (name , day_number) VALUES (? , ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("si", $count_day['days_without_name'], $count_day['days_without_count']);
    $stmt->execute();
}

if (isset($_POST['number_submitted'])) {
    header("Location: http://study/planner/page4-settings.php");
    die();
}



$name_count = "SELECT name FROM count ORDER BY id DESC LIMIT 1 ";
if ($a = $mysqli->prepare($name_count)) {

    /* Запустить выражение */
    $a->execute();
    /* Определить переменные для результата */
    $a->bind_result($name);
    /* Выбрать значения */
    $a->fetch();
    $a->close();

}



if (isset($_POST['plus_day'])){
    $stmt = $mysqli->prepare("INSERT INTO count (name , day_number) VALUES (?,?)");



    $number_count = "SELECT day_number FROM count ORDER BY id DESC LIMIT 1";
    if ($b = $mysqli->prepare($number_count)) {
        /* Запустить выражение */
        $b->execute();
        /* Определить переменные для результата */
        $b->bind_result($day_count);
        /* Выбрать значения */
        $b->fetch();
        $b->close();
    }

    $day_count_plusOne=$day_count+1;

    $stmt->bind_param("si",  $name , $day_count_plusOne );
    $stmt->execute();
}

if (isset($_POST['plus_day'])){
    header("Location: http://study/planner/page2-main.php");
    die();
}



$count_day = [
    'days_without_name' => $_POST['days_without_name'],
    'days_without_count' => $_POST['days_without_count'],
];

if (isset($_POST['number_submitted'])) {
    $sql = "INSERT INTO count (name , day_number) VALUES (? , ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("si", $count_day['days_without_name'], $count_day['days_without_count']);
    $stmt->execute();
}

if (isset($_POST['number_submitted'])) {
    header("Location: http://study/planner/page4-settings.php");
    die();
}


$task1everyday = [
    'everyday_task1' => $_POST['everyday_task1'],
];

if ((isset($_POST['everyday_task_submitted'] )) && !empty($task1everyday['everyday_task1'])) {
    $sql = "INSERT INTO task_everyday1 (task51) VALUES (?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $task1everyday['everyday_task1']);
    $stmt->execute();
}


$task2everyday = [
    'everyday_task2' => $_POST['everyday_task2'],
];

if ((isset($_POST['everyday_task_submitted'] )) && !empty($task2everyday['everyday_task2'])) {
    $sql = "INSERT INTO task_everyday2 (task52) VALUES (?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $task2everyday['everyday_task2']);
    $stmt->execute();
}

$task3everyday = [
    'everyday_task3' => $_POST['everyday_task3'],
];

if ((isset($_POST['everyday_task_submitted'] ))  && !empty($task3everyday['everyday_task3'])) {
    $sql = "INSERT INTO task_everyday3 (task53) VALUES (?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $task3everyday['everyday_task3']);
    $stmt->execute();
}

$task4everyday = [
    'everyday_task4' => $_POST['everyday_task4'],
];

if ((isset($_POST['everyday_task_submitted'])) && !empty($task4everyday['everyday_task4'])){
    $sql = "INSERT INTO task_everyday4 (task54) VALUES (?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $task4everyday['everyday_task4']);
    $stmt->execute();
}


$task5everyday = [
    'everyday_task5' => $_POST['everyday_task5'],
];

if ((isset($_POST['everyday_task_submitted'])) && !empty($task5everyday['everyday_task5'])) {
    $sql = "INSERT INTO task_everyday5 (task55) VALUES (?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $task5everyday['everyday_task5']);
    $stmt->execute();
}



$task6everyday = [
    'everyday_task6' => $_POST['everyday_task6'],
];

if ((isset($_POST['everyday_task_submitted'])) && !empty($task6everyday['everyday_task6'])) {
    $sql = "INSERT INTO task_everyday6 (task56) VALUES (?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $task6everyday['everyday_task6']);
    $stmt->execute();
}



if (isset($_POST['everyday_task_submitted'])) {
    header("Location: http://study/planner/page4-settings.php");
    die();
}


$schedule = [
    '1-1' => $_POST['timeThisDay1'],
    '1-2' => $_POST['textThisDay1'],
    'timeThisDay2' => $_POST['timeThisDay2'],
    'textThisDay2' => $_POST['textThisDay2'],
    'timeThisDay3' => $_POST['timeThisDay3'],
    'textThisDay3' => $_POST['textThisDay3'],
    'timeThisDay4' => $_POST['timeThisDay4'],
    'textThisDay4' => $_POST['textThisDay4'],
    'timeThisDay5' => $_POST['timeThisDay5'],
    'textThisDay5' => $_POST['textThisDay5'],
    'timeThisDay6' => $_POST['timeThisDay6'],
    'textThisDay6' => $_POST['textThisDay6'],
    'timeThisDay7' => $_POST['timeThisDay7'],
    'textThisDay7' => $_POST['textThisDay7'],
    'timeThisDay8' => $_POST['timeThisDay8'],
    'textThisDay8' => $_POST['textThisDay8'],
];

if ((isset($_POST['timeThisDay_submitted'])) && !empty($schedule['1-2'])) {
    $sql = "INSERT INTO watch_ampm (time , watch_ampm_text) VALUES (? , ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $schedule['1-1'], $schedule['1-2']);
    $stmt->execute();
}

if ((isset($_POST['timeThisDay_submitted'])) && !empty($schedule['textThisDay2'])) {
    $sql = "INSERT INTO watch_ampm (time , watch_ampm_text) VALUES (? , ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $schedule['timeThisDay2'], $schedule['textThisDay2']);
    $stmt->execute();
}

if ((isset($_POST['timeThisDay_submitted'])) && !empty($schedule['textThisDay3'])) {
    $sql = "INSERT INTO watch_ampm (time , watch_ampm_text) VALUES (? , ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $schedule['timeThisDay3'], $schedule['textThisDay3']);
    $stmt->execute();
}

if ((isset($_POST['timeThisDay_submitted'])) && !empty($schedule['textThisDay4'])) {
    $sql = "INSERT INTO watch_ampm (time , watch_ampm_text) VALUES (? , ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $schedule['timeThisDay4'], $schedule['textThisDay4']);
    $stmt->execute();
}

if ((isset($_POST['timeThisDay_submitted'])) && !empty($schedule['textThisDay5'])) {
    $sql = "INSERT INTO watch_ampm (time , watch_ampm_text) VALUES (? , ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $schedule['timeThisDay5'], $schedule['textThisDay5']);
    $stmt->execute();
}

if ((isset($_POST['timeThisDay_submitted'])) && !empty($schedule['textThisDay6'])) {
    $sql = "INSERT INTO watch_ampm (time , watch_ampm_text) VALUES (? , ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $schedule['timeThisDay6'], $schedule['textThisDay6']);
    $stmt->execute();
}

if ((isset($_POST['timeThisDay_submitted'])) && !empty($schedule['textThisDay7'])) {
    $sql = "INSERT INTO watch_ampm (time , watch_ampm_text) VALUES (? , ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $schedule['timeThisDay7'], $schedule['textThisDay7']);
    $stmt->execute();
}

if ((isset($_POST['timeThisDay_submitted'])) && !empty($schedule['textThisDay8'])) {
    $sql = "INSERT INTO watch_ampm (time , watch_ampm_text) VALUES (? , ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $schedule['timeThisDay8'], $schedule['textThisDay8']);
    $stmt->execute();
}

if (isset($_POST['timeThisDay_submitted'])) {
    header("Location: http://study/planner/page4-settings.php");
    die();
}



?>