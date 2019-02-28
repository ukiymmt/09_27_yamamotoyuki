<?php
include('user_functions.php');
// functions.phpを読み込む
if (
    !isset($_POST['name']) || $_POST['name']=='' ||
    !isset($_POST['lid']) || $_POST['lid']=='' ||
    !isset($_POST['lpw']) || $_POST['lpw']=='' ||
    !isset($_POST['kanri_flg']) || $_POST['kanri_flg']=='' ||
    !isset($_POST['life_flg']) || $_POST['life_flg']==''


) {
    exit('ParamError');
}
// issetはタスクの有無を確認。中身がNULLかどうかをチェックする　’’は空白を示している
// 有無の確認が必須の場合に実行
$id = $_POST['id'];
$name = $_POST['name'];
$lid = $_POST['lid'];
$lpw = $_POST['lpw'];
$kanri_flg = $_POST['kanri_flg'];
$life_flg = $_POST['life_flg'];
$pdo = db_conn();
$sql ='INSERT INTO user_table(id, name, lid, lpw, kanri_flg, life_flg )VALUES(NULL, :a1, :a2, :a3, :a4, :a5)';
$stmt = $pdo->prepare($sql);
// PDOstatement::excuteでググる
$stmt->bindValue(':a1', $name, PDO::PARAM_STR);
$stmt->bindValue(':a2', $lid, PDO::PARAM_STR);
$stmt->bindValue(':a3', $lpw, PDO::PARAM_STR);
$stmt->bindValue(':a4', $kanri_flg, PDO::PARAM_INT);
$stmt->bindValue(':a5', $life_flg, PDO::PARAM_INT);
// PDOが
$status = $stmt->execute();

if ($status==false) {
    $error = $stmt->errorInfo();
    exit('sqlError:'.$error[2]);
// [2]はvar-dumpでエラーが出ている。つまりエラーを表示している。エラー内容を適切なものに入れ直す。ググってみよう
} else {
    header('Location: user_index.php');
}
