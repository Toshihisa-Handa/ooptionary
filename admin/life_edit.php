<?php
session_start();
include('funcs.php');
sschk();


//DB接続
$pdo = db_conn();

//データ登録SQL作成
$stmt = $pdo->prepare("SELECT* FROM user");
$status = $stmt->execute();


//3．データ登録処理後（基本コピペ使用でOK)
$view='';


if($status==false){
  //error handling
  $error = $stmt->errorInfo();
  exit("SQLError:".$error[2]);

}else{
 //Table内のデータ数だけループ
 while( $r = $stmt->fetch(PDO::FETCH_ASSOC)){
  $view .='<div class="card admin-flg" style="width: 36rem;"><div class="card-header">《ユーザ名》'.$r["name"];
  $view .=' </div><ul class="list-group list-group-flush"><li class="list-group-item">《登録アドレス》'.$r["email"];
  $view .='</li><li class="list-group-item">《管理者権限（0->有, 1->無）'.$r["kanli_flg"];
  $view.='</li><li class="list-group-item">《サービス提供（0->有、1->停止）》'.$r["life_flg"];
  $view .="</li>";
  $view .='<li class="list-group-item">';
  $view .='<a href="life_change.php?id='.$r["id"].'" class="btn btn-danger">';
  $view .='[強制退会]';
  $view .='</a>';
  $view .='</li></ul></div>';

//life_change.phpへのリンク
  // $view .='  ';
  // $view .='<a href="life_change.php? id='.$r["id"].'">';
  // $view .='[強制退会]';
  // $view .='</a>';


//   <div class="card" style="width: 18rem;">
//   <div class="card-header">
//   《ユーザ名》 
//   </div>
//   <ul class="list-group list-group-flush">
//     <li class="list-group-item">《登録アドレス》 </li>
//     <li class="list-group-item">《管理者権限（0->有, 1->無）》 </li>
//     <li class="list-group-item">《サービス提供（0->有、1->停止）》</li>
//   </ul>
// </div>



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
<style>
  .admin-flg{
   margin:30px 0 0 0;
  }
</style>
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
<li class="nav-item ">
<a class="nav-link" href="viewall.php">削除機能</a>
</li>
<li class="nav-item active">
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
<h1>ユーザ一覧</h1>
 <p><?=$view?></p>
 </div>

</body>
</html>