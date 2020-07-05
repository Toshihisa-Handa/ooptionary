<!-- ユーザーテーブルに登録するPHP -->

<?php
//最初にSESSIONを開始！！ココ大事！！
session_start();

//POST値

$name = $_POST["name"];
$email = $_POST["email"];
$lpw = $_POST["lpw"];



//1.  DB接続します
include("funcs.php");
$pdo = db_conn();

if(isset($name)){
//2. データ登録SQL作成
$sql = "SELECT * FROM user WHERE name=:name AND lpw=:lpw AND kanli_flg=0";
$stmt = $pdo->prepare($sql); //* PasswordがHash化の場合→条件はlidのみ
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR); //* PasswordがHash化する場合はコメントする
$status = $stmt->execute();
//3. SQL実行時にエラーがある場合STOP
if ($status==false) {
    sql_error();
}

//4. 抽出データ数を取得
$val = $stmt->fetch();         //1レコードだけ取得する方法
//$count = $stmt->fetchColumn(); //SELECT COUNT(*)で使用可能()

//5. 該当レコードがあればSESSIONに値を代入
//if(password_verify($lpw, $val["lpw"])){ //* PasswordがHash化の場合はこっちのIFを使う
if ($val["id"] != "") {
    //Login成功時
    $_SESSION["chk_ssid"]  = session_id(); //この認証が通ったときのKEYを渡しておく
    $_SESSION["kanri_flg"] = $val['kanri_flg'];
    $_SESSION["name"]      = $val['name'];
    redirect("../manege/adminMenu.php");
} else {
    //Login失敗時(Logout経由)
    redirect("error.php");
}

exit();

}

//2. データ登録SQL作成
$sql = "SELECT * FROM user WHERE email=:email AND lpw=:lpw AND life_flg=0";
$stmt = $pdo->prepare($sql); //* PasswordがHash化の場合→条件はlidのみ
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR); //* PasswordがHash化する場合はコメントする
$status = $stmt->execute();

//3. SQL実行時にエラーがある場合STOP
if ($status==false) {
    sql_error();
}

//4. 抽出データ数を取得
$val = $stmt->fetch();         //1レコードだけ取得する方法
//$count = $stmt->fetchColumn(); //SELECT COUNT(*)で使用可能()

//5. 該当レコードがあればSESSIONに値を代入
//if(password_verify($lpw, $val["lpw"])){ //* PasswordがHash化の場合はこっちのIFを使う
if ($val["id"] != "") {
    //Login成功時
    $_SESSION["chk_ssid"]  = session_id(); //この認証が通ったときのKEYを渡しておく
    $_SESSION["kanri_flg"] = $val['kanri_flg'];
    $_SESSION["name"]      = $val['name'];
    redirect("mypage.php");
} else {
    //Login失敗時(Logout経由)
    redirect("error.php");
}

exit();
