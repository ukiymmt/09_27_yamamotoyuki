<?php

//最初にSESSIONを開始！！
session_start();

//0.外部ファイル読み込み
include("user_functions.php");

$menu1=menu1();
$menu2=menu2();

if($_SESSION["kanri_flg"]==0){
    $menu=$menu1;
}elseif($_SESSION["kanri_flg"]==1){
    $menu=$menu2;
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ブックマーク</title>
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
            <a class="navbar-brand" href="#">ブックマーク</a>
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

    <form action="book.insert.php" method="post">
        <div class="form-group">
            <label for="name">書籍名</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="url">書籍のurl</label>
            <input type="text" class="form-control" id="url" name="url">
        </div>
        <div class="form-group">
            <label for="comment">感想コメント</label>
            <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="indate">登録日時</label>
            <input type="date" id="indate" name="indate"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</body>

</html>