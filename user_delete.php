<?php
include('user_functions.php');
$id   = $_GET['id'];
$pdo = db_conn();
$sql = 'DELETE FROM user_table WHERE id =:id';
// sqlのデータを
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();
if ($status==false) {
    errorMsg($stmt);
} else {
    header('Location: user_select.php');
    exit;
}
