<?php
session_start();
include('funcs.php');//別の階層にfuncs.phpがある場合は「betukaisou/funcs.php」などパスを変えてincludesする
sschk();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/menutop.css">


<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- font awsome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
</head>
<body>
  <p>管理者TOP画面</p>
  <a href="viewall.php">投稿一覧画面へ</a>
  <a href="../user/login.php">ログイン画面へ</a>
  <a href="../user/logout_act.php">ログアウト</a>

  <div class="jumbotron">

<div class="container">
  <h1 class="display-4">管理者TOPページ</h1>
  <p class="lead">ここは管理者TOPページです</p>
  <hr class="my-4">
  <p>管理機能一覧</p>

  <div class="d-flex card-box">
      <div class="card" style="width: 18rem;">
      <!-- <img src="..." class="card-img-top" alt="..."> -->
        <div class="card-body">
        <h5 class="card-title">強制記事  削除機能 </h5>
        <p class="card-text">管理者権限にて投稿記事を強制削除します。</p>
        <a href="viewall.php" class="btn btn-primary">Go somewhere</a>
      </div>
    </div><div class="card" style="width: 18rem;">
      <!-- <img src="..." class="card-img-top" alt="..."> -->
      <div class="card-body">
        <h5 class="card-title">強制退会機能</h5>
        <p class="card-text">管理者権限にて特定ユーザへのサービス提供を停止状態（退会扱い）とします。</p>
        <a href="life_edit.php" class="btn btn-primary">Go somewhere</a>
      </div>
    </div><div class="card" style="width: 18rem;">
      <!-- <img src="..." class="card-img-top" alt="..."> -->
      <div class="card-body">
        <h5 class="card-title">警告機能</h5>
        <p class="card-text">不適切なサービス利用が見受けられる特定ユーザへ警告します。</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
</div>

</div>
</div>




</body>
</html>