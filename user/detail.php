<?php
// session_start();
$id = 2; //?id~**を受け取る
include("funcs.php");
// sschk();
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM user_oops_table WHERE name='井上'AND indate='2020-07-04 01:29:55'");

$stmt->bindValue(":id",$id,PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
if($status==false) {
    sql_error();
}else{
    $row = $stmt->fetch();
}

?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Marked in the browser</title>
  <script src="js/marked.js"></script>
</head>
<body>
<div class="media-body">
          <h5 class="w-50 p-3" style="background-color: #CCFFCC;"><?=$row["title"]?></h5>
          <div id="content"></div>
          <!-- タイトルはこの辺りに入れる -->
          <script>
          document.getElementById('content').innerHTML =
          marked("<?=$row["naiyou"]?>");
          </script>
        </div>
</body>
</html>