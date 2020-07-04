<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン | うぷしょなりー</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <a href="../manege/adminMenu.php">管理者画面へ</a>
    <a href="mypage.php">ユーザー画面へ</a>
    <a href="../index.php">TOP画面へ</a>

    <div class="form-content">
        <form class="form-login" method='POST' action="login_act.php">
            <div class="login-title">
                <h1 class="h2 login-title--ja">うぷしょなりー</h1>
                <span class="login-title--en">Login</span>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="form-label">メールアドレス</label>
                <input type="email" name='email' id="inputEmail" class="form-control" placeholder="test@test.com" required autofocus>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="form-label">パスワード</label>
                <input type="password" name='lpw' id="inputPassword" class="form-control" placeholder="password" required>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="rememberCheck">
                <label class="form-check-label form-label" for="rememberCheck">ログイン状態を保持</label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
        </form>

        <form class="form-login" method="POST" action="u_insert.php">
            <div class="title-border">アカウントを持っていない方</div>
            <button class="btn btn-lg btn-outline-primary btn-block" type="submit">新規登録</button>
            <div class="jumbotron">
                <fieldset>
                    <legend>ユーザー登録</legend>
                    <label>名前：<input type="text" name="name"></label><br>
                    <label>email：<input type="text" name="email"></label><br>
                    <label>ログインID：<input type="text" name="lid"></label><br>
                    <label>ログインPASSWORD：<input type="password" name="lpw"></label><br>
                    <label><input type="hidden" name="kanli_flg" value="1"></label><br></label><br>
                    <label><input type="hidden" name="life_flg"value="0"></label><br></label><br>
                    <input type="submit" value="登録">
                </fieldset>
            </div>        
        </form>
        <small class="d-block text-muted text-center">&copy; 2020 Oopsionary.</small>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
</body>
</html>

