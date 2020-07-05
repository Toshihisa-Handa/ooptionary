<?php 
//共通に使う関数を記述

//1.XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}


// 2.DB接続の関数
function db_conn(){
  try {
    $db_name = "team";    //データベース名
    $db_id   = "root";      //アカウント名
    $db_pw   = "root";      //パスワード：XAMPPはパスワード無しに修正してください。
    $db_host = "localhost"; //DBホスト
    return  $pdo = new PDO('mysql:dbname='.$db_name.';charset=utf8;host='.$db_host, $db_id, $db_pw);
  } catch (PDOException $e) {
    exit('DB Connection Error:'.$e->getMessage());
  }
}

//3.セッションリジェネレイト処理を全てのページで行うため、関数化し記述を簡略化する(Login認証)

//手打ち入力でログイン後のページにログインせずに行ってもエラーになるようにしている） 
//SessionCheck
function sschk(){
  if(!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"]!=session_id()){
    exit("Login Error");
 }else{
    session_regenerate_id(true); //SESSION_IDを毎ページ変える
    $_SESSION["chk_ssid"] = session_id();
 }
}

?>