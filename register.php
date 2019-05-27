<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>회원가입</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <h1 style="text-align: center; margin:60px 300px 0 0; font-weight:bold">일기장</h1>
  <h4 style="text-align: center; margin-top: 100px; font-weight:bold">회원가입</h4>

  <form action="register_ok.php" method="post" style="width: 500px; margin: 0 auto; margin-top: 30px;">
    <div class="form-group">
      <label for="id">아이디</label>
      <input type="text" class="form-control" name="id" placeholder="아이디를 입력하세요.">
    </div>
    <div class="form-group">
      <label for="name">이름</label>
      <input type="text" class="form-control" name="name" placeholder="이름을 입력하세요.">
    </div>
    <div class="form-group">
      <label for="pwd">비밀번호</label>
      <input type="password" class="form-control" name="pwd" placeholder="비밀번호를 입력하세요.">
    </div>
    <div class="form-group" style="float: right;">
      <button type="submit" class="btn btn-primary">회원가입</button>
      <button type="button" class="btn btn-danger" onclick="location.href='index.php'">뒤로가기</button>
    </div>
  </form>
</body>

</html>