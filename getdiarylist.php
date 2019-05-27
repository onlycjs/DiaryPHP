<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>일기장</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <header style="width:600px; height:100px; margin: 0 auto;">
    
    <div class="form-group" style="float: right; padding-top:50px;">
      <button type="button" class="btn btn-info" style="height:40px;"><p><?= $_SESSION['user']->name ?> 님</p></button>
      <button type="button" class="btn btn-danger" onclick="location.href='index.php'">로그아웃</button>
    </div>

  </header>
  <h1 style="text-align: center; margin:60px 220px 0 0; font-weight:bold">일기장</h1>
  <div class="wrapper" style="width: 600px; margin: 0 auto; margin-top: 30px;">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">번호</th>
          <th scope="col">제목</th>
          <th scope="col" style="text-align:center">글쓴이</th>
        </tr>
      </thead>
      <tbody>

        <?php
        require("db.php");
        $sql = "SELECT * FROM diary";
        $q = $con->prepare($sql);
        $q->execute();

        $list = $q->fetchAll(PDO::FETCH_OBJ);

        foreach ($list as $diary) {
          echo "<tr>";
          echo "<td>$diary->no </td>";
          echo "<td><a href='getdiary.php?id=$diary->no' style='text-decoration:none; color: #000;'> $diary->title </a></td>";
          echo "<td style='text-align:center'>$diary->writer</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
    <div class="form-group" style="float: right;">
      <button type="button" class="btn btn-primary" onclick="location.href='insertdiary.php'">글작성</button>
    </div>
  </div>
</body>

</html>