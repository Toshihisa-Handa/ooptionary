<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理者ログイン | うぷしょなりー</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <header class="header bg-dark">
        <div class="l-inner">
            <nav class="navbar navbar-expand-lg navbar-light navbar-dark">
                <a class="navbar-brand" href="../index.php">うぷしょなりー</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">ログイン画面</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="../team/admin.php">管理者画面</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">トップページ</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div class="form-content">
        <form class="form-login" method="POST" action="u_insert.php">
            <div class="login-title">
                <h1 class="h2 login-title--ja">管理画面ログイン</h1>
                <span class="login-title--en">ADMIN</span>
            </div>
            <div class="form-group">
                <label for="inputName" class="form-label">ログイン名</label>
                <input type="text" name="name" id="inputName" class="form-control" placeholder="山田 太郎" required>
            </div>
            <input type="hidden" name="email" value="kanli@kanli.jp">
            <input type="hidden" name="lid" value="管理者">
            <div class="form-group">
                <label for="inputPassword" class="form-label">パスワード</label>
                <input type="password" name="lpw" id="inputPassword" class="form-control" placeholder="password" required>
            </div>
            <input type="hidden" name="kanli_flg" value="0">
            <input type="hidden" name="life_flg" value="0">
            <button class="btn btn-lg btn-primary btn-block mb-5" type="submit">登録する</button>
            <small class="d-block text-muted text-center">&copy; 2020 Oopsionary.</small>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
</body>
</html>