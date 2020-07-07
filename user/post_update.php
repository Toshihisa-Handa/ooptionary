
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
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("SQLError:".$error[2]);//エラーが起きたらエラーの2番目の配列から取ります。ここは考えず、これを使えばOK
                             // SQLEErrorの部分はエラー時出てくる文なのでなんでもOK
}else{//ここより下は修正している↓
 //1データのみ抽出の為,select2.phpであったwhile文を削除。ここで$rowを定義
$row = $stmt->fetch();
}

//以下のhtmlタグ内の記述は見た目のレイアウトを合わせると良いため、基本index2.phpをコピペする。
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>投稿更新</title>
  <?php include('l-header-css.php') ?>
  <link rel="stylesheet" href="../css/list.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
</head>
<body>
  <?php include('l-header.php') ?>
  <div class="container">
    <form method="post" action="post_update_act.php">
      <input type="hidden" name="id" value="<?=$row["id"]?>">
      <input type="hidden" name="name" value="<?=$row["name"]?>">
      <h5 class="w-30 p-1" style="background-color: #CCFFCC;">◆タイトル（編集中）</h5>
      <input type="text" name="title" value="<?=$row["title"]?>" class="form-control">
      <h5 class="w-30 p-1 border solid rounded mt-2" style="background-color: #FFFFEE;">◆記事本文（編集中）</h5>
      <textarea id="editor" name="naiyou" rows="8" cols="40"><?=$row["naiyou"]?></textarea>
      <div class="text-center"><input type="submit" value="送信" class="btn btn-primary btn-lg"></div>
    </form>
  </div>
  <?php @include('l-footer.php') ?>
  <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
  <script>
    var simplemde = new SimpleMDE({
      element: document.getElementById("editor"),
      forceSync: true
    });
  </script>
</body>
</html>













