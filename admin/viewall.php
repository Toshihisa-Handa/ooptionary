<?php
session_start();
include('funcs.php');//別の階層にfuncs.phpがある場合は「betukaisou/funcs.php」などパスを変えてincludesする
sschk();


//1. DB接続します
$pdo = db_conn();



//2．データ登録SQL作成
//prepare("")の中にはmysqlのSQLで入力したINSERT文を入れて修正すれば良いイメージ
$stmt = $pdo->prepare("SELECT* FROM user_oops_table");
$status = $stmt->execute();


//3．データ登録処理後（基本コピペ使用でOK)
$view='';
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("SQLError:".$error[2]);//エラーが起きたらエラーの2番目の配列から取ります。ここは考えず、これを使えばOK
                             // SQLEErrorの部分はエラー時出てくる文なのでなんでもOK
}else{
 //selectデータの数だけ自動でループしてくれる
 while( $r = $stmt->fetch(PDO::FETCH_ASSOC)){
  //  $view.='<p>'.$r['id'].$r['name'].$r['author'].$r['kan'].$r['kansou'].$r['indate'].'</p>';

  $view .='<p>';
  $view .=$r["indate"].":".$r["name"].":".$r["title"].'<br>'.$r["naiyou"];
  // $view .='</a>';
//以下はupdateのリンクタグの記述
  $view .='  ';
  $view .='<a href="update.php? id='.$r["id"].'">';
  $view .='[更新]';
  $view .='</a>';
//以下はdeleteのリンクタグの記述
  $view .='  ';
  $view .='<a href="delete.php? id='.$r["id"].'">';
  $view .='[削除]';
  $view .='</a>';
  $view .='</p>';
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
  <h1>投稿一覧</h1>
  <a href="list.php">登録へ戻る</a>
  <p><a href="../team/logout.php">ログアウト</a></p>

 <p><?=$view?></p>
</body>
</html>