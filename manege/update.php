<?php 
include('funcs.php')


?>


<?php
//updateはupdate_viewで修正した内容に更新させるための記述（insert.phpを修正して作る）


//1. POSTデータ取得
$id = $_POST['id'];
$name = $_POST['name'];
$title = $_POST['title'];
$naiyou = $_POST['naiyou'];


//2. DB接続します(insert.phpをまるコピのままでOK)
$pdo = db_conn();



//３．データ登録SQL作成
//3-1: sql作る処理(追記部分)
//更新の基本の書き方：UPDATE テーブル名 SET 変更データ WHERE 選択データ;
$sql = 'UPDATE user_oops_table SET name=:name,title=:title,naiyou=:naiyou WHERE id=:id';
//prepare("")の中にはmysqlのSQLで入力したINSERT文を入れて修正すれば良いイメージ

//3-2: sql文をstmtに渡す処理
$stmt = $pdo->prepare($sql);

//3-3: 関連付けをして、nameやemailを3-1の同じ文字に紐付ける(ここはinsert.phpから修正している)
$stmt->bindValue(':name',   h($name),   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)  第３引数は省略出来るが、セキュリティの観点から記述している。文字列か数値はmysqlのデータベースに登録したものがvarcharaかintかというところで判断する
$stmt->bindValue(':title', h($title), PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':naiyou', h($naiyou), PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id',     h($id),     PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)

//3-4: 最後に実行する
$status = $stmt->execute();//このexecuteで上で処理した内容を実行している



//４．データ登録処理後（基本コピペ使用でOK)
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("SQLError:".$error[2]);//エラーが起きたらエラーの2番目の配列から取ります。ここは考えず、これを使えばOK
                             // SQLEErrorの部分はエラー時出てくる文なのでなんでもOK
}else{//この項目以下の遷移先のみ変更↓
  //５．select2.phpへリダイレクト(エラーがなければindex.phpt)
  header('Location: select.php');//Location:の後ろの半角スペースは必ず入れる。
  exit;
//このupdate.phpが表示されるのはエラーの時のみ。更新が順調に完了した場合select2.phpへ移動する
}
?>
