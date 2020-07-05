<?php 
session_start();
include('funcs.php');//別の階層にfuncs.phpがある場合は「betukaisou/funcs.php」などパスを変えてincludesする
sschk();

echo $_SESSION["name"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<?php include('header.php') ?>
<body>
<?php echo $_SESSION["name"];
$name= $_SESSION["name"]; 
?>

<form method="post" action="myOopsInsert.php">
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
</form>


</body>
</html>