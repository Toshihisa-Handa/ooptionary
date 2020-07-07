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
if ($status==false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);//エラーが起きたらエラーの2番目の配列から取ります。ここは考えず、これを使えばOK
                             // SQLEErrorの部分はエラー時出てくる文なのでなんでもOK
} else {
    //selectデータの数だけ自動でループしてくれる
    while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //  $view.='<p>'.$r['id'].$r['name'].$r['author'].$r['kan'].$r['kansou'].$r['indate'].'</p>';
        $view .='<div class="card mb-5">';
        //以下はupdateのリンクタグの記述
        $view .='<h5 class="card-header">'.$r["title"].'</h5>';
        $view .='<div class="card-body">';
        $view .=$r["indate"].":".$r["name"].'<br>';
        $view .=$r["naiyou"];
        $view .='<div><a href="update.php? id='.$r["id"].'" class="btn btn-primary list_btn update_btn"><i class="fas fa-redo-alt"></i>';
        $view .='更新';
        $view .='</a>';
        //以下はdeleteのリンクタグの記述
        $view .='  ';
        $view .='<a href="delete.php? id='.$r["id"].'" class="btn btn-danger list_btn trash_btn"><i class="fas fa-trash-alt"></i>';
        $view .='削除';
        $view .='</a></div>';
        $view .='</div>';
        $view .='</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include('../user/l-header-css.php') ?>
</head>
<body>
<header class="navbar-dark bg-dark">
<div class="container">
<nav class="navbar navbar-expand-lg">
<a class="navbar-brand" href="menutop.php">管理者</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav ml-auto">
<li class="nav-item active">
<a class="nav-link" href="viewall.php">削除機能</a>
</li>
<li class="nav-item ">
<a class="nav-link" href="life_edit.php">退会機能</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../user/login.php">ログイン画面</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../user/logout.php">ログアウト</a>
</li>
</ul>
</div>
</nav>
</div>
</header>
  <div class="container">
    <h1>投稿一覧</h1>
    <a href="list.php">登録へ戻る</a>
    <p><a href="../user/logout_act.php">ログアウト</a></p>
    <?=$view?>
  </div>
</body>
</html>