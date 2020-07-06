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
</head>
<body>
<?php include('l-header.php') ?>
<?php echo $_SESSION["name"];
$name= $_SESSION["name"]; 
?>
<div class="container">
  <h5 class="w-30 p-1" style="background-color: #CCFFCC;">◆タイトル</h5>
    <form method="POST" action="post_act.php">
        <input type="hidden" name="name" value="<?php echo $name?>">
        <input class="form-control form-control-lg" id="editor" type="text" name="title" placeholder="タイトルを入力">

        <div class="w-30 p-1 border solid rounded" style="background-color: #FFFFEE;">◆記事本文</div>
            <textarea id="editor2" name="naiyou" rows="8" cols="40">
            </textarea>
            
              <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
              <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
              <script>
                  var simplemde = new SimpleMDE({ 
                      element: document.getElementById("editor2"),
                      forceSync: true
                  });
              </script>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">

        <input type="submit" value="送信">
    </form>
    </div>




<!-- <form method="post" action="post_act.php">
  <div>
   <fieldset>
    <legend>YourOoops!</legend>
     <label>名前：<input type="text" name="name" value="<?php echo $name?>"></label><br>
     <label>タイトル<input type="text" name="title"></label><br>
     <p>内容</p>
     <label><textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form> -->

<?php @include('l-footer.php') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
</body>
</html>
