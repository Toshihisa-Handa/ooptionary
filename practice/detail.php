<?php
// session_start();
$id = 3; //?id~**を受け取る
include("funcs.php");
// sschk();
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM test WHERE id=:id");
$stmt->bindValue(":id",$id,PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
if($status==false) {
    sql_error();
}else{
    $row = $stmt->fetch();
}
echo $row["naiyou"];
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Marked in the browser</title>
  <script src="js/marked.js"></script>
</head>
<body>
  <div id="content"></div>
  <script>
    document.getElementById('content').innerHTML =
      marked("<?=$row["naiyou"]?>");
  </script>
</body>
</html>