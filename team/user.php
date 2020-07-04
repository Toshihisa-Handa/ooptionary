<!-- 詳細情報を登録する最初の画面 -->

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ユーザー登録</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>div{padding: 10px;font-size:16px;}</style>
    </head>
    <body>

        <!-- Head[Start] -->
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header"><a class="navbar-brand" href="u_select.php">ユーザー一覧</a></div>
                </div>
            </nav>
        </header>
        <!-- Head[End] -->

        <!-- Main[Start] -->
        <form method="POST" action="u_insert.php">
            <div class="jumbotron">
                <fieldset>
                    <legend>ユーザー登録</legend>
                    <label>名前：<input type="text" name="name"></label><br>
                    <label>email：<input type="text" name="email"></label><br>
                    <label>ログインID：<input type="text" name="lid"></label><br>
                    <label>ログインPASSWORD：<input type="password" name="lpw"></label><br>
                    <label><input type="hidden" name="kanli_flg"></label><br>
                    <label><input type="hidden" name="life_flg"></label><br>
                    <input type="submit" value="登録">
                </fieldset>
            </div>
        </form>
        <!-- Main[End] -->


    </body>
</html>
