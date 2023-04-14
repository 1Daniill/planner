<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

function get_reminder() {
    $mysqli = new mysqli("localhost", "1rusdaniil", "ovuvil2020", "myfirstdb");
    if (mysqli_connect_errno()) {
        print("Ошибка: Невозможно подключиться к MySQL ('mysqli_connect_errno()'): " . mysqli_connect_error());
    }

    $remind_placeholder="SELECT rem_text FROM reminder ORDER BY id DESC LIMIT 1";
    $result=$mysqli->query($remind_placeholder);
    $row = $result->fetch_assoc();

    return $row["rem_text"];
}


function get_task_year() {
    $mysqli = new mysqli("localhost", "1rusdaniil", "ovuvil2020", "myfirstdb");
    if (mysqli_connect_errno()) {
        print("Ошибка: Невозможно подключиться к MySQL ('mysqli_connect_errno()'): " . mysqli_connect_error());
    }

    $task_year_placeholder="SELECT task1 FROM task_year ORDER BY id DESC LIMIT 1";
    $result=$mysqli->query($task_year_placeholder);
    $row = $result->fetch_assoc();

    return $row["task1"];
}


function get_task_quarter() {
    $mysqli = new mysqli("localhost", "1rusdaniil", "ovuvil2020", "myfirstdb");
    if (mysqli_connect_errno()) {
        print("Ошибка: Невозможно подключиться к MySQL ('mysqli_connect_errno()'): " . mysqli_connect_error());
    }

    $task_quarter_placeholder="SELECT task2 FROM task_quarter ORDER BY id DESC LIMIT 1";
    $result=$mysqli->query($task_quarter_placeholder);
    $row = $result->fetch_assoc();

    return $row["task2"];
}

function get_task_month() {
    $mysqli = new mysqli("localhost", "1rusdaniil", "ovuvil2020", "myfirstdb");
    if (mysqli_connect_errno()) {
        print("Ошибка: Невозможно подключиться к MySQL ('mysqli_connect_errno()'): " . mysqli_connect_error());
    }

    $task_month_placeholder="SELECT task3 FROM task_month ORDER BY id DESC LIMIT 1";
    $result=$mysqli->query($task_month_placeholder);
    $row = $result->fetch_assoc();

    return $row["task3"];
}

function get_task_week() {
    $mysqli = new mysqli("localhost", "1rusdaniil", "ovuvil2020", "myfirstdb");
    if (mysqli_connect_errno()) {
        print("Ошибка: Невозможно подключиться к MySQL ('mysqli_connect_errno()'): " . mysqli_connect_error());
    }

    $task_week_placeholder="SELECT task4 FROM task_week ORDER BY id DESC LIMIT 1";
    $result=$mysqli->query($task_week_placeholder);
    $row = $result->fetch_assoc();

    return $row["task4"];
}


function get_count_name() {
    $mysqli = new mysqli("localhost", "1rusdaniil", "ovuvil2020", "myfirstdb");
    if (mysqli_connect_errno()) {
        print("Ошибка: Невозможно подключиться к MySQL ('mysqli_connect_errno()'): " . mysqli_connect_error());
    }

    $count_name_placeholder="SELECT name , day_number FROM count ORDER BY id DESC LIMIT 1";
    $result=$mysqli->query($count_name_placeholder);
    $row = $result->fetch_assoc();

    return $row["name"];

}

function get_count_day() {
    $mysqli = new mysqli("localhost", "1rusdaniil", "ovuvil2020", "myfirstdb");
    if (mysqli_connect_errno()) {
        print("Ошибка: Невозможно подключиться к MySQL ('mysqli_connect_errno()'): " . mysqli_connect_error());
    }

    $count_day_placeholder="SELECT name , day_number FROM count ORDER BY id DESC LIMIT 1";
    $result=$mysqli->query($count_day_placeholder);
    $row = $result->fetch_assoc();

    return $row["day_number"];

}


function get_task_everyday1() {
    $mysqli = new mysqli("localhost", "1rusdaniil", "ovuvil2020", "myfirstdb");
    if (mysqli_connect_errno()) {
        print("Ошибка: Невозможно подключиться к MySQL ('mysqli_connect_errno()'): " . mysqli_connect_error());
    }

    $task_everyday1_placeholder="SELECT task51 FROM task_everyday1 ORDER BY task_everyday_id DESC LIMIT 1";
    $result=$mysqli->query($task_everyday1_placeholder);
    $row = $result->fetch_assoc();

    return $row["task51"];

}


function get_task_everyday2() {
    $mysqli = new mysqli("localhost", "1rusdaniil", "ovuvil2020", "myfirstdb");
    if (mysqli_connect_errno()) {
        print("Ошибка: Невозможно подключиться к MySQL ('mysqli_connect_errno()'): " . mysqli_connect_error());
    }

    $task_everyday2_placeholder="SELECT task52 FROM task_everyday2 ORDER BY task_everyday_id DESC LIMIT 1";
    $result=$mysqli->query($task_everyday2_placeholder);
    $row = $result->fetch_assoc();

    return $row["task52"];

}


function get_task_everyday3() {
    $mysqli = new mysqli("localhost", "1rusdaniil", "ovuvil2020", "myfirstdb");
    if (mysqli_connect_errno()) {
        print("Ошибка: Невозможно подключиться к MySQL ('mysqli_connect_errno()'): " . mysqli_connect_error());
    }

    $task_everyday3_placeholder="SELECT task53 FROM task_everyday3 ORDER BY task_everyday_id DESC LIMIT 1";
    $result=$mysqli->query($task_everyday3_placeholder);
    $row = $result->fetch_assoc();

    return $row["task53"];

}

function get_task_everyday4() {
    $mysqli = new mysqli("localhost", "1rusdaniil", "ovuvil2020", "myfirstdb");
    if (mysqli_connect_errno()) {
        print("Ошибка: Невозможно подключиться к MySQL ('mysqli_connect_errno()'): " . mysqli_connect_error());
    }

    $task_everyday4_placeholder="SELECT task54 FROM task_everyday4 ORDER BY task_everyday_id DESC LIMIT 1";
    $result=$mysqli->query($task_everyday4_placeholder);
    $row = $result->fetch_assoc();

    return $row["task54"];

}

function get_task_everyday5() {
    $mysqli = new mysqli("localhost", "1rusdaniil", "ovuvil2020", "myfirstdb");
    if (mysqli_connect_errno()) {
        print("Ошибка: Невозможно подключиться к MySQL ('mysqli_connect_errno()'): " . mysqli_connect_error());
    }

    $task_everyday5_placeholder="SELECT task55 FROM task_everyday5 ORDER BY task_everyday_id DESC LIMIT 1";
    $result=$mysqli->query($task_everyday5_placeholder);
    $row = $result->fetch_assoc();

    return $row["task55"];

}

function get_task_everyday6() {
    $mysqli = new mysqli("localhost", "1rusdaniil", "ovuvil2020", "myfirstdb");
    if (mysqli_connect_errno()) {
        print("Ошибка: Невозможно подключиться к MySQL ('mysqli_connect_errno()'): " . mysqli_connect_error());
    }

    $task_everyday6_placeholder="SELECT task56 FROM task_everyday6 ORDER BY task_everyday_id DESC LIMIT 1";
    $result=$mysqli->query($task_everyday6_placeholder);
    $row = $result->fetch_assoc();

    return $row["task56"];
}


function get_schedule_time() {
    $mysqli = new mysqli("localhost", "1rusdaniil", "ovuvil2020", "myfirstdb");
    if (mysqli_connect_errno()) {
        print("Ошибка: Невозможно подключиться к MySQL ('mysqli_connect_errno()'): " . mysqli_connect_error());
    }

    $schedule_name="SELECT time , watch_ampm_text FROM  watch_ampm ORDER BY id DESC LIMIT 8";
    $result=$mysqli->query($schedule_name);
    $row = $result->fetch_assoc();

    return $row["time"];

}


function get_schedule_text() {
    $mysqli = new mysqli("localhost", "1rusdaniil", "ovuvil2020", "myfirstdb");
    if (mysqli_connect_errno()) {
        print("Ошибка: Невозможно подключиться к MySQL ('mysqli_connect_errno()'): " . mysqli_connect_error());
    }

    $schedule_name="SELECT time , watch_ampm_text FROM  watch_ampm ORDER BY id DESC LIMIT 8";
    $result=$mysqli->query($schedule_name);
    $row = $result->fetch_assoc();

    return $row["watch_ampm_text"];

}


?>
