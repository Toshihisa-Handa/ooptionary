<?php
session_start();
include('funcs.php');//別の階層にfuncs.phpがある場合は「betukaisou/funcs.php」などパスを変えてincludesする
// sschk();

// $name = $_SESSION["name"];
//1. DB接続します
$pdo = db_conn();
// $id = $_SESSION["chk_ssid"];


//2．データ登録SQL作成
//prepare("")の中にはmysqlのSQLで入力したINSERT文を入れて修正すれば良いイメージ
$stmt = $pdo->prepare('SELECT * FROM user_oops_table WHERE name=:name');
$stmt->bindValue(':name',$_SESSION["name"], PDO::PARAM_INT);
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
        //更新用リンクを埋め込んだ表示コード(元のselect.phpから修正する箇所)
        $view .='<p>';
        // $view .='<a href="u_view.php? id='.$r["id"].'">';
        $view .=$r["indate"].":".$r["name"].":".$r["title"].'<br>'.$r["naiyou"];
        // $view .='</a>';
        //以下はupdateのリンクタグの記述
        $view .='  ';
        $view .='<a href="u_view.php? id='.$r["id"].'">';
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
  <?php include('l-header-css.php') ?>
</head>
<body>
<?php include('l-header.php') ?>
<h3>投稿一覧</h3>

<p><?=$view?></p>



<?php @include('l-footer.php') ?>
</body>
</html>