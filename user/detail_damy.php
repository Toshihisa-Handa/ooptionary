<?php
session_start();
include('funcs.php');//別の階層にfuncs.phpがある場合は「betukaisou/funcs.php」などパスを変えてincludesする
// sschk();


//1.GETでidを取得
$id =$_GET['id'];



//2. DB接続します(ここコピペでOK。select2.phpの時と記載同じ)
$pdo = db_conn();



//3．データ登録SQL作成(今回はselect2.phpの一覧表示から1行だけ取り出す記述をする)
//prepare("")の中にはmysqlのSQLで入力したINSERT文を入れて修正すれば良いイメージ
$sql = "SELECT * FROM user_oops_table WHERE id=:id";//この1行select2.phpから修正
$stmt = $pdo->prepare($sql);//select2.phpで元々あった()内の記述を修正し、変数sqlへ格納したものを（）内に記述
$stmt->bindValue('id', $id, PDO::PARAM_INT);//ここの記述はselect2.phpにない部分！
$status = $stmt->execute();


//4．データ登録処理後（elseより手前はselect2.phpと同じ）
$view='';
if ($status==false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);//エラーが起きたらエラーの2番目の配列から取ります。ここは考えず、これを使えばOK
                             // SQLEErrorの部分はエラー時出てくる文なのでなんでもOK
} else {//ここより下は修正している↓
 //1データのみ抽出の為,select2.phpであったwhile文を削除。ここで$rowを定義
$r = $stmt->fetch();
}?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>詳細ページ</title>
  <?php include('l-header-css.php'); ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
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
  <h5 class="p-3 mb-5 detail__title" style="background-color: #CCFFCC;"><?php echo $r["title"]; ?>
      </h5>
    <div id="content" class="detail">      
      <div class="detail__text" id="mdraw"><?php echo nl2br($r["naiyou"]); ?>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <script>
      document.getElementById("content").innerHTML =
        marked(document.getElementById("mdraw").innerHTML);
    </script>
  </div>
</body>
</html>