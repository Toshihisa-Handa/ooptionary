<?php
session_start();
include('funcs.php');//別の階層にfuncs.phpがある場合は「betukaisou/funcs.php」などパスを変えてincludesする
// sschk();

$name = $_SESSION["name"];
//1. DB接続します
$pdo = db_conn();


//2．データ登録SQL作成
//prepare("")の中にはmysqlのSQLで入力したINSERT文を入れて修正すれば良いイメージ
$stmt = $pdo->prepare('SELECT * FROM user_oops_table WHERE name=:name ORDER BY id DESC');
$stmt->bindValue(':name',$name, PDO::PARAM_STR);
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
        $view.='<a href="detail.php? id='.$r["id"].'" class="list_detail">'.$r['title'].'</a></h5>';
        // $view.='<div class="card-text list_text content">';
        // $view.= nl2br($r['naiyou']).'</div>';

      $view.='<a href="#" class="btn btn-primary list_btn toggle_btn">続きを開く</a>';
      $view.= '<a href="delete.php? id='.$r["id"].'" class="btn btn-primary list_btn trash_btn"><i class="fas fa-trash-alt"></i></a>';
      $view .='<a href="post_detail.php? id='.$r["id"].'" class="btn btn-primary list_btn update_btn"><i class="fas fa-redo-alt"></i></a>';
     
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


  <?php include('l-header.php') ?>
  <div class="container">
  <?php echo $_SESSION["name"];
 ?>
    <?=$view?>
  </div><!-- 末尾の閉じタグ -->
  <?php @include('l-footer.php') ?>



</body>
</html>