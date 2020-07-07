<?php
session_start();
include('funcs.php');
sschk();


//DB接続
$pdo = db_conn();

//データ登録SQL作成
$stmt = $pdo->prepare("SELECT* FROM user");
$status = $stmt->execute();


//3．データ登録処理後（基本コピペ使用でOK)
$view='';


if($status==false){
  //error handling
  $error = $stmt->errorInfo();
  exit("SQLError:".$error[2]);

}else{
 //Table内のデータ数だけループ
 while( $tmp = $stmt->fetch(PDO::FETCH_ASSOC)){
  $view .='<p>';
  $view .="《ユーザ名》".$tmp["name"]."<br>《登録アドレス》".$tmp["email"]."<br>《ユーザ登録日時》".$tmp["indate"].'<br>《管理者権限（0->有, 1->無）》'.$tmp["kanli_flg"]."<br>《サービス提供（0->有、1->停止）》".$tmp["life_flg"];

//life_change.phpへのリンク
  $view .='  ';
  $view .='<a href="life_change.php? id='.$tmp["id"].'">';
  $view .='[強制退会]';
  $view .='</a>';

 }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>ユーザ一覧</h1>
  <a href="list.php">登録へ戻る</a>
  <p><a href="../user/logout_act.php">ログアウト</a></p>

 <p><?=$view?></p>
</body>
</html>