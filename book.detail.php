<?php
include('user_functions.php');
$id = $_GET['id'];
$pdo = db_conn();
$sql = 'SELECT * FROM gs_bm_table WHERE id = :id';
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
            <a class="navbar-brand" href="#">ブックマーク一覧</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                   <?=$menu?>
                </ul>
            </div>
        </nav>
    </header>

    <form method="post" action="book.update.php">
        <div class="form-group">
            <label for="name">名前</label>
            <!-- 受け取った値をvaluesに埋め込もう -->
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="url">URL</label>
            <!-- 受け取った値をvaluesに埋め込もう -->
            <input type="date" class="form-control" id="url" name="url">
        </div>
        <div class="form-group">
            <label for="comment">Comment</label>
            <!-- 受け取った値挿入しよう -->
            <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <!-- idは変えたくない = ユーザーから見えないようにする-->
        <input type="hidden" name="id">
    </form>

</body>

</html>