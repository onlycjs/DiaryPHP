<?php
require("db.php");

$no = $_POST['no'];
$title = $_POST['title'];
$weather = $_POST['weather'];
$content = $_POST['content'];

$sql = "UPDATE diary SET title = ?, weather = ?, content = ? WHERE no = ?";

$cnt = query($con, $sql, [$title, $weather, $content, $no]);

if ($cnt == 1) {
    msgAndGo("수정 성공", "/getdiarylist.php");
} else {
    sendJsonResponse('수정 실패', false,[$title, $weather, $content, $no]);
}

