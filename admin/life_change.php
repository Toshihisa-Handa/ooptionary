<?php
session_start();
include('funcs.php');
sschk();

//postデータ取得
$id = $_GET["id"];



//DB接続
$pdo = db_conn();

//現在のlife_flg値を取得,現在のlife_flg値と逆の値を変数に代入する
$life_flg = 1;
// $stmt = $pdo->prepare("SELECT life_flg FROM user WHERE id=:id");
// $stmt->execute();
// $life_flg = $stmt->fetchColumn();
// if ($life_flg ==0) {
//     $life_flg2 =1;
// }else($life_flg ==1){1
//     $life_flg2 =1;
// }




//データ登録SQL作成
$stmt = $pdo -> prepare ("UPDATE user SET life_flg=:life_flg WHERE id=:id");
$stmt ->bindValue(":life_flg", $life_flg, PDO::PARAM_INT);
$stmt ->bindValue(":id", $id, PDO::PARAM_INT);
$status = $stmt->execute();

//データ登録処理後のエラーハンドリング
if ($status==false) {
    $error = $stmt ->errorInfo();
    exit("SQLError:".$error[2]);
}else{
    header("Location:life_edit.php");
    exit();
}

