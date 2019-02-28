<?php
include('user_functions.php');
$id = $_GET['id'];
$pdo = db_conn();
$sql = 'SELECT * FROM user_table WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();
if ($status==false) {
    errorMsg($stmt);
} else {
    $rs = $stmt->fetch();
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>todo更新ページ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        div{
            padding: 10px;
            font-size:16px;
            }
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">todo更新</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="user_index.php">todo登録</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user_select.php">todo一覧</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <form method="post" action="user_update.php">
        <div class="form-group">
            <label for="name">Name</label>
            <!-- 受け取った値をvaluesに埋め込もう -->
            <input type="text" class="form-control" id="name" name="name" value ="<?=$rs['name']?>">
        </div>
        <div class="form-group">
            <label for="lid">Lid</label>
            <!-- 受け取った値をvaluesに埋め込もう -->
            <input type="text" class="form-control" id="lid" name="lid" value ="<?=$rs['lid']?>">
        </div>
        <div class="form-group">
            <label for="lpw">Lpw</label>
            <!-- 受け取った値挿入しよう -->
            <input type="text" class="form-control" id="lpw" name="lpw" value ="<?=$rs['lpw']?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <!-- idは変えたくない = ユーザーから見えないようにする-->
        <input type="hidden" name="id" value ="<?=$rs['id']?>">
    </form>

</body>

</html>