<?php
require("db.php");

$title = $_POST['title'];
$weather = $_POST['weather'];
$content = $_POST['content'];
$writer = $_SESSION['user']->name;

if ($title == "" || $weather == "" || $content == "" || $writer == "") {
    sendJsonResponse('필요한 값이 누락되었습니다.', false);
    exit;
}

$sql = "INSERT INTO diary(title, weather, content, writer) VALUES (?,?,?,?)";

$cnt = query($con, $sql, [$title, $weather, $content, $writer]);

if ($cnt == 1) {
    msgAndGo("등록 성공", "/getdiarylist.php");
} else {
    sendJsonResponse('등록 실패', false);
}

