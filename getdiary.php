<!-- 게시물 보기 -->
<?php
require("db.php");
$id = $_GET['id'];
$sql = "SELECT * FROM diary WHERE no = ?";
$q = $con->prepare($sql);
$q->execute([$id]);

$diary = $q->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?php echo $diary->title ?></title>
</head>

<body>
    
    <div class="wrapper" style="width: 500px; margin: 0 auto; margin-top: 30px;">
    <h1>일기 열람</h1>
        <div class="content">
            <form action="updatediary_ok.php" method="POST">
                <div class="form-group">
                    <label>번호</label>
                    <input class="form-control" name="no" type="text" value=<?php echo $diary->no ?> readonly>
                </div>
                <div class="form-group">
                    <label>작성자</label>
                    <input class="form-control" name="writer" type="text" value=<?php echo $diary->writer ?> readonly>
                </div>
                <div class="form-group">
                    <label>제목</label>
                    <input type="text" name="title" class="form-control" value=<?php echo $diary->title ?>>
                </div>
                <div class="form-group">
                    <label>날씨</label>
                    <input type="text" name="weather" class="form-control" value=<?php echo $diary->weather ?>>
                </div>
                <div class="form-group">
                    <label>내용</label>
                    <textarea class="form-control" name="content" rows="10"><?php echo $diary->content ?></textarea>
                </div>
                <div class="from-gruop" style="float:right">
                    <a href="getdiarylist.php"><button type="button" class="btn btn-secondary">뒤로가기</button></a>
                    <?php if ($diary->writer == $_SESSION['user']->name) { ?>
                        <button type="submit" class="btn btn-primary">수정하기</button>
                        <button type="button" class="btn btn-danger" onclick="location.href='deletediary_ok.php?no=<?php echo $diary->no ?>'">삭제하기</button>
                    <?php } ?>
                </div>
            </form>
        </div>
    </div>
</body>

</html>