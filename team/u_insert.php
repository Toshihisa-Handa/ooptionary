<!-- データを登録するためのPHP -->

<?php
//1. POSTデータ取得
$name   = $_POST["name"];
$email  = $_POST["email"];
$lid    = $_POST["lid"];
$lpw    = $_POST["lpw"];

//2. DB接続します
include("funcs.php");
$pdo = db_conn();


//３．データ登録SQL作成
//kanli_flg = 管理者:0 ユーザー：1
//life_flg = 生きてる：0、退会済み:1
$stmt = $pdo->prepare("INSERT INTO user(name,email,lid,lpw,kanli_flg,life_flg,indate)VALUES(:name,:email,:lid,:lpw,1,0,sysdate())");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':email', $lid, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);        //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行


//４．データ登録処理後

if($status==false){
  sql_error();

}else{
  redirect("login.php");
}

?>
