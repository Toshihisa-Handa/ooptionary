<?php
// session_start();
include('funcs.php');//別の階層にfuncs.phpがある場合は「betukaisou/funcs.php」などパスを変えてincludesする
// sschk();

//1. DB接続します
$pdo = db_conn();



//2．データ登録SQL作成
//prepare("")の中にはmysqlのSQLで入力したINSERT文を入れて修正すれば良いイメージ
// $stmt = $pdo->prepare('SELECT * FROM user_oops_table WHERE name=:name ORDER BY id DESC');//元データ
$stmt = $pdo->prepare('SELECT * FROM user_oops_table ORDER BY id DESC');//テストデータ
// $stmt->bindValue(':name',$name, PDO::PARAM_STR);
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
        $view.= '<div class="card list_card">
        <h5 class="card-header"> 
        <div class="sumnail">
        <i class="fas fa-user-circle"></i>';
        $view.= $r['name'].'</div></h5>
        <div class="card-body">
        <h5 class="card-title">';
        // ここから変更した7/7 15時
        $view.='<a href="detail_damy.php? id='.$r["id"].'" class="">'.$r['title'].'</a></h5>';
      // $view.= '<a href="delete.php? id='.$r["id"].'" class="btn btn-primary list_btn trash_btn"><i class="fas fa-trash-alt"></i></a>';
      // $view .='<a href="post_update.php? id='.$r["id"].'" class="btn btn-primary list_btn update_btn"><i class="fas fa-redo-alt"></i></a>';
    //  ここまで変更
      $view.='</div></div>';
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include('l-header-css.php') ?>
  <link rel="stylesheet" href="../css/list.css">
</head>
<body>


<header class="l-header">
  <div class="l-inner d-flex">
    <div class="l-header-logo"><a href="../index.php" class="l-header-logo__link item-center">うぷしょなりー</a></div>
    <ul class="l-header-list flex--auto">
      <li class="l-header-list__item">
        <?php $url = $_SERVER['REQUEST_URI'];
          if (strstr($url, 'list')==true) {
              echo '<a class="item-center l-header-list__link is-current" href="list.php">';
          } else {
              echo '<a class="item-center l-header-list__link" href="list.php">';
          }?>
        <i class="far fa-file-alt l-header__icon"></i>記事一覧</a></li>
      <li class="l-header-list__item">
        <?php $url = $_SERVER['REQUEST_URI'];
          if (strstr($url, 'post')==true) {
              echo '<a class="item-center l-header-list__link is-current" href="post.php">';
          } else {
              echo '<a class="item-center l-header-list__link" href="post.php">';
          }?>
  
     
        <!-- <i class="fas fa-user-circle l-header__icon"></i>マイページ</a></li> -->
    </ul>
    <div class="item-center l-header-login"><a href="login.php" class="l-header-login__btn">ログイン<i class="fas fa-caret-right l-header-login__arrow"></i></a></div>
  </div>
</header>
<div class="main">
  <div class="container">
 
    <?=$view?>
  </div><!-- 末尾の閉じタグ -->
  <?php @include('l-footer.php') ?>



</body>
</html>