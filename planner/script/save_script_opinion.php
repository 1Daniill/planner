<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "1rusdaniil", "ovuvil2020", "myfirstdb");
if (mysqli_connect_errno()) {
    print("Ошибка: Невозможно подключиться к MySQL ('mysqli_connect_errno()'): " . mysqli_connect_error());
}

$opin = [
    'login_opinion' => $_POST['login_opinion'],
    'form_opinion' => $_POST['form_opinion'],
];

if (isset($_POST['opinion_submitted'])) {
    $sql = "INSERT INTO opinion (username, opinion_text) VALUES (?,?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $opin['login_opinion'],$opin['form_opinion']);
    $stmt->execute();
}

if( isset( $_POST['opinion_submitted'] ) )
{
    echo "Эта переменная определена, поэтому меня и напечатали.";
    header("Location: http://study/planner/page%205.php");
    die();
}




?>