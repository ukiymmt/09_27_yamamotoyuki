<?php
include('book.functions.php');
if (
    !isset($_POST['name'])  || $_POST['name']=='' ||
    !isset($_POST['url']) || $_POST['url']=='' ||
    !isset($_POST['comment']) || $_POST['comment']==''
    
    
) {
    exit('ParamError');
}
$id = $_POST['id'];
$name = $_POST['name'];
$lid = $_POST['url'];
$lpw = $_POST['comment'];
$pdo = db_conn();
$sql = 'UPDATE gs_bm_table SET name=:a1, url=:a2, comment=:a3 WHERE id =:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $name, PDO::PARAM_STR);
$stmt->bindValue(':a2', $url, PDO::PARAM_STR);
$stmt->bindValue(':a3', $comment, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();
if ($status==false) {
    errorMsg($stmt);
} else {
    header('Location: book.select.php');
    exit;
}
