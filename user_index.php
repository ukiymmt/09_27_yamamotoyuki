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
    <title>todo登録</title>
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
            <a class="navbar-brand" href="#">ユーザー登録</a>
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

    <form method="post" action="user_insert.php">
        <div class="form-group">
            <label for="name">名前</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter task">
        </div>
        <div class="form-group">
            <label for="lid">ログインID</label>
            <input type="text" class="form-control" id="lid" name="lid">
        </div>
        <div class="form-group">
            <label for="lpw">ログインパスワード</label>
            <input type="text" class="form-control" id="lpw" name="lpw">
        </div>
        <div class="form-group">
            <label for="kanri_flg">管理者</label>
            <input type="hidden" class="form-control" id="kanri_flg" value="0" name="kanri_flg">
        </div>
        <div class="form-group">
            <label for="life_flg">ライフ</label>
            <input type="hidden" class="form-control" id="life_flg" value="0" name="life_flg">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</body>

</html>