<?php
session_start();
include('funcs.php');//別の階層にfuncs.phpがある場合は「betukaisou/funcs.php」などパスを変えてincludesする
sschk();
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>投稿</title>

</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">投稿一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->
<p><a href="../team/logout.php">ログアウト</a></p>
<p><a href="adminmenu.php">管理者TOPへ</a></p>

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>YourOoops!</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>タイトル<input type="text" name="title"></label><br>
     <p>内容</p>
     <label><textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>



