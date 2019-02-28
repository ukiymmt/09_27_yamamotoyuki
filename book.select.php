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


//1. DB接続

// include('user_functions.php');
$pdo= db_conn();


//データ表示SQL作成
$sql = 'SELECT * FROM gs_bm_table';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//データ表示
$view='';
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit('sqlError:'.$error[2]);
} else {
    //Selectデータの数だけ自動でループしてくれる
    //http://php.net/manual/ja/pdostatement.fetch.php
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= '<li class="list-group-item">';
        $view .= '<p>'.$result['name'].'-'.$result['lid'].'-'.$result['lpw'].'</p>';
        $view .='<a href="book.detail.php?id='.$result[id].'"class="badge badge-primary">編集</a>';
        $view .='<a href="book.delete.php?id='.$result[id].'"class="badge badge-danger">削除</a>';
        $view .= '</li>';
    }
}
?>



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>todoリスト表示</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
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

    <div>
        <ul class="list-group">
            <?=$view?>
        </ul>
    </div>

</body>

</html>