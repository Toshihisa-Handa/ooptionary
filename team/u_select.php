<!-- 登録情報の一覧 -->

<?php
//0. SESSION開始！！
session_start();
include('funcs.php');//別の階層にfuncs.phpがある場合は「betukaisou/funcs.php」などパスを変えてincludesする
sschk();
//１．関数群の読み込み
include("funcs.php");

//LOGINチェック → funcs.phpへ関数化しましょう！
sschk();

//２．データ登録SQL作成
$pdo = db_conn();
$stmt = $pdo->prepare("SELECT * FROM user");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false) {
  sql_error();
}else{
  while( $r = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<p>';
    $view .= '<a href="u_detail.php?id='.$r["id"].'">';
    $view .= $r["id"]."|".$r["name"]."|".$r["lid"]."|".$r["lpw"];
    $view .= '</a>';

    if($_SESSION["kanri_flg"]=="1"){
        $view .= "　";
        $view .= '<a href="u_delete.php?id='.$r["id"].'">';
        $view .= "[削除]";
        $view .= "</a>";
        $view .= "</p>";
    }
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>登録ユーザー</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="user.php">ユーザー登録</a>
      <a class="navbar-brand" href="logout.php">LOGOUT</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?=$view?></div>
</div>
<!-- Main[End] -->

</body>
</html>
