<?php
$id = $_POST['id'];
$name = $_POST['name'];
$pwd = $_POST['pwd'];

require("db.php");

$sql = "INSERT INTO diary_user (id, name, pwd) VALUES (?, ?, PASSWORD(?))";

$cnt = query($con, $sql, [$id, $name, $pwd]);

if ($cnt == 0) {
    msgAndGo("회원가입 실패", "/register.php");
} else {
    msgAndGo("회원가입 성공", "/index.php");
}
