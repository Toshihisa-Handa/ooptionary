<?php
session_start();
include('funcs.php');//別の階層にfuncs.phpがある場合は「betukaisou/funcs.php」などパスを変えてincludesする
// sschk();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include('l-header-css.php') ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
</head>
<style>
  .post-form {
    margin: 0 0 80px;
  }
</style>
<body>
  <?php include('l-header.php') ?>
  <div class="container">
    <form method="POST" action="post_act.php" class="post-form">
      <h5 class="w-30 p-1" style="background-color: #CCFFCC;">◆タイトル</h5>
      <input type="hidden" name="name" value="<?php echo $name?>">
      <input class="form-control form-control-lg" id="editor" type="text" name="title" placeholder="タイトルを入力">
      <h5 class="w-30 p-1 border solid rounded mt-2" style="background-color: #FFFFEE;">◆記事本文</h5>
      <textarea id="editor2" name="naiyou" rows="8" cols="40"></textarea>
      <div class="text-center"><input type="submit" value="送信" class="btn btn-primary btn-lg"></div>
    </form>
  </div>
  <?php @include('l-footer.php') ?>
  <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
  <script>
    var simplemde = new SimpleMDE({
      element: document.getElementById("editor2"),
      forceSync: true
    });
  </script>
</body>
</html>