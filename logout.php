<?php
require("db.php");
unset($_SESSION['user']);
unset($_SESSION['name']);
    
msgAndGo("로그아웃 성공", "/index.php");

