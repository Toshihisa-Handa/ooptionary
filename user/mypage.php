<?php
session_start();
include('funcs.php');//別の階層にfuncs.phpがある場合は「betukaisou/funcs.php」などパスを変えてincludesする
sschk();
// $name = $_SESSION["name"];
//1. DB接続します
$pdo = db_conn();
$id = $_SESSION["chk_ssid"];
$name = $_SESSION["name"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>マイページ</title>
  <?php include('l-header-css.php') ?>
  <link rel="stylesheet" href="../css/mypage.css">
</head>
<body>
  <?php include('l-header.php') ?>
  <div class="container">
    <div class="mypage-area">
      <div class="user-card">
        <div class="user-profile">
          <p class="user-profile__icon"><i class="fas fa-user-alt"></i></p>
          <div class="user-profile__name"><?php echo $name; ?>
          </div>
        </div>
        <div class="user-profile__border"></div>
        <div class="user-profile__number">01<span class="user-profile__post">投稿数</span></div>
        <div class="user-profile__border"></div>
        <a class="btn btn-danger" href="logout.php" role="button">ログアウト</a>
      </div>
    </div>
  </div>
  <?php @include('l-footer.php') ?>
</body>
</html>