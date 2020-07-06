<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録 | うぷしょなりー</title>
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
                        <li class="nav-item active">
                            <a class="nav-link" href="login.php">ログイン画面</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../user/admin.php">管理者画面</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div class="form-content">
        <form class="form-login" method="POST" action="user_act.php">
            <div class="login-title">
                <h1 class="h2 login-title--ja">ユーザー登録</h1>
                <span class="login-title--en">SINE UP</span>
            </div>
            <div class="form-group">
                <label for="inputName" class="form-label">名前</label>
                <input type="text" name="name"autocomplete="off"  id="inputName" class="form-control" placeholder="山田 太郎" required>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="form-label">メールアドレス</label>
                <input type="email" name="email" autocomplete="off" id="inputEmail" class="form-control" placeholder="test@test.com" required>
            </div>
            <div class="form-group">
                <label for="inputId" class="form-label">アカウント名</label>
                <input type="text" name="lid" autocomplete="off" id="inputId" class="form-control" placeholder="kirikko" required>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="form-label">パスワード</label>
                <input type="password" autocomplete="off" name="lpw" id="inputPassword" class="form-control" placeholder="123" required>
            </div>
            <input type="hidden" name="kanli_flg" value="1">
            <input type="hidden" name="life_flg" value="0">
            <button class="btn btn-lg btn-primary btn-block mb-5" type="submit">登録する</button>
            <small class="d-block text-muted text-center">&copy; 2020 Oopsionary.</small>
        </form>
    </div>
    <?php @include('cmn-footer.php') ?>
</body>
</html>