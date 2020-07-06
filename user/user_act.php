<!-- データを登録するためのPHP -->

<?php
//1. POSTデータ取得
$name   = $_POST["name"];
$email  = $_POST["email"];
$lid    = $_POST["lid"];
$lpw    = $_POST["lpw"];
// echo var_dump($_POST);

// exit;



//2. DB接続します
include("funcs.php");
$pdo = db_conn();



  //３．データ登録SQL作成
//kanli_flg = 管理者：0、ユーザー:1
//life_flg = 生きてる：0、退会済み:1
$stmt = $pdo->prepare("INSERT INTO user(name,email,lid,lpw,kanli_flg,life_flg,indate)VALUES(:name,:email,:lid,:lpw,1,0,sysdate())");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':email', $email, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);        //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行





//４．データ登録処理後

if($status==false){
  sql_error();

}else{

  $val = $stmt->fetch();         //1レコードだけ取得する方法
//$count = $stmt->fetchColumn(); //SELECT COUNT(*)で使用可能()

//5. 該当レコードがあればSESSIONに値を代入
//if(password_verify($lpw, $val["lpw"])){ //* PasswordがHash化の場合はこっちのIFを使う
if ($val["id"] != "") {
    //Login成功時
    $_SESSION["chk_ssid"]  = session_id(); //この認証が通ったときのKEYを渡しておく
    $_SESSION["kanri_flg"] = $val['kanri_flg'];
    $_SESSION["name"]      = $val['name'];
  
  redirect("list.php");
}else{
   //Login失敗時(Logout経由)
   redirect("error.php");

}



}

?>
