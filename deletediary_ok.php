<?php
require("db.php");

$no = $_GET['no'];

$sql = "DELETE FROM diary WHERE no = ?";

$cnt = query($con, $sql, [$no]);

if ($cnt == 1) {
    msgAndGo("삭제 성공", "/getdiarylist.php");
} else {
    sendJsonResponse('삭제 실패', false);
}

