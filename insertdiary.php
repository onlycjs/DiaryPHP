<!-- 게시물 작성 -->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>글작성</title>
</head>

<body>
  <div class="wrapper" style="width: 500px; margin: 0 auto; margin-top: 50px;">
    <div class="content">
      <h1>글쓰기</h1>
      <form action="insertdiary_ok.php" method="POST">
        <div class="form-group">
          <label>작성자</label>
          <input class="form-control" type="text" placeholder=<?= $_SESSION['user']->name ?> readonly>
        </div>
        <div class="form-group">
          <label>제목</label>
          <input type="text" name="title" class="form-control" placeholder="제목을 입력하세요">
        </div>
        <div class="form-group">
          <label>날씨</label>
          <input type="text" name="weather" class="form-control" placeholder="날씨를 입력하세요">
        </div>
        <div class="form-group">
          <label>내용</label>
          <textarea name="content" class="form-control" rows="10" placeholder="내용을 입력하세요"></textarea>
        </div>
        <div class="form-group" style="float:right">
          <button type="submit" class="btn btn-primary">글쓰기</button>
          <a href="getdiarylist.php"><button type="button" class="btn btn-danger">뒤로가기</button></a>
        </div>
      </form>
    </div>
  </div>

</body>

</html>