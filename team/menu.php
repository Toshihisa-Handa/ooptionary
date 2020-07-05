<?php 
session_start();
include('funcs.php');//別の階層にfuncs.phpがある場合は「betukaisou/funcs.php」などパスを変えてincludesする
sschk();


?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="select.php">アンケート一覧</a>　
            <a class="navbar-brand" href="user.php">ユーザー登録</a>　
            <a class="navbar-brand" href="user_select.php">ユーザー一覧</a>　
            <a class="navbar-brand" href="mypage.php">マイページ</a>　
            <a class="navbar-brand" href="logout.php">ログアウト</a>
        </div>
    </div>
</nav>