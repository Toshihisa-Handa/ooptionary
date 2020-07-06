<?php
session_start();
include('funcs.php');
sschk();

//postデータ取得
$id = $_GET["id"];
$life_flg = 0;

//DB接続
$pdo = db_conn();

//データ登録SQL作成
$stmt = $pdo -> prepare ("UPDATE user SET life_flg==1 WHERE id=:id");
$stmt ->bindValue(":life_flg", $life_flg, PDO::PARAM_INT);
$stmt ->bindValue(":id", $id, PDO::PARAM_INT);
$status = $stmt->execute();

//データ登録処理後のエラーハンドリング
if ($status==false) {
    $error = $stmt ->errorInfo();
    exit("SQLError:".$error[2]);
}else{
    header("Location:bm_update_view.php");
    exit();
}

