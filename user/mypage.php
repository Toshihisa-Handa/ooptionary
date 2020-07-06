<?php
session_start();
include('funcs.php');//別の階層にfuncs.phpがある場合は「betukaisou/funcs.php」などパスを変えてincludesする
// sschk();

// $name = $_SESSION["name"];
//1. DB接続します
$pdo = db_conn();
// $id = $_SESSION["chk_ssid"];


//2．データ登録SQL作成
//prepare("")の中にはmysqlのSQLで入力したINSERT文を入れて修正すれば良いイメージ
$stmt = $pdo->prepare('SELECT * FROM user_oops_table WHERE name="のり"');
// $stmt->bindValue(':name',$_SESSION["name"], PDO::PARAM_INT);
$status = $stmt->execute();


//3．データ登録処理後（基本コピペ使用でOK)
$view='';
if ($status==false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);//エラーが起きたらエラーの2番目の配列から取ります。ここは考えず、これを使えばOK
                             // SQLEErrorの部分はエラー時出てくる文なのでなんでもOK
} else {
    //selectデータの数だけ自動でループしてくれる
    while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //更新用リンクを埋め込んだ表示コード(元のselect.phpから修正する箇所)
        $view .='<p>';
        // $view .='<a href="u_view.php? id='.$r["id"].'">';
        $view .=$r["indate"].":".$r["name"].":".$r["title"].'<br>'.$r["naiyou"];
        // $view .='</a>';
        //以下はupdateのリンクタグの記述
        $view .='  ';
        $view .='<a href="u_view.php? id='.$r["id"].'">';
        $view .='[更新]';
        $view .='</a>';
        //以下はdeleteのリンクタグの記述
        $view .='  ';
        $view .='<a href="delete.php? id='.$r["id"].'">';
        $view .='[削除]';
        $view .='</a>';
        $view .='</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/mypage.css">
  <link rel="stylesheet" href="../css/header.css">
  <?php include('l-header-css.php') ?>
</head>
<body>
  <!-- ヘッダーのincludeをheadタグの一番下に入れる -->
  <?php include('l-header.php') ?>
  <div class="container">
    <!-- 左側のエリア -->
    <div class="left-ara">
      <!-- マイページヘッダー -->
      <div class="profiele">
        <div class="left-container">
          <div class="profiele-area">
            <div class="profiele-box">
              <i class="fas fa-user-circle"></i>
              <p>You Name</p>
            </div>
            <div class="nav-box">
              <div class="your-post">
                <div class="post-total">100</div>
                <p>総投稿数</p>
              </div>
              <div class="your-follow">
                <div class="follow-total">50</div>
                <p>フォロー数</p>
              </div>
              <div class="your-follower">
                <div class="follower-total">10</div>
                <p>フォロワー数</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 投稿エリア -->

      <div class="push-log">
        <div class="left-container">
          <!-- 記事の投稿ここから -->
          <div class="push-log-area">
            <div class="log-title">
              <p><i class="fas fa-user-circle"></i>&nbsp;&nbsp;You Name</p>
              <p>ここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入る</p>

              <div class="icons">
                <i class="far fa-heart"></i>
                <i class="far fa-thumbs-up"></i>
                <i class="fas fa-upload"></i>
              </div>
            </div>
            <div class="log-img">
            </div>
            
                   
                    <h3>投稿一覧</h3>
                        <a href="list.php">登録へ戻る</a>
                        <p><a href="logout_act.php">ログアウト</a></p>

                        <p><?=$view?></p>


                  <!-- 記事の投稿ここまで -->
          </div>
          <div class="push-log-area">
            <div class="log-title">
              <p><i class="fas fa-user-circle"></i>&nbsp;&nbsp;You Name</p>
              <p>ここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入る</p>

              <div class="icons">
                <i class="far fa-heart"></i>
                <i class="far fa-thumbs-up"></i>
                <i class="fas fa-upload"></i>
              </div>
            </div>
            <div class="log-img">
            </div>
          </div>
          <div class="push-log-area">
            <div class="log-title">
              <p><i class="fas fa-user-circle"></i>&nbsp;&nbsp;You Name</p>
              <p>ここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入る</p>

              <div class="icons">
                <i class="far fa-heart"></i>
                <i class="far fa-thumbs-up"></i>
                <i class="fas fa-upload"></i>
              </div>
            </div>
            <div class="log-img">
            </div>
          </div>
          <div class="push-log-area">
            <div class="log-title">
              <p><i class="fas fa-user-circle"></i>&nbsp;&nbsp;You Name</p>
              <p>ここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入る</p>

              <div class="icons">
                <i class="far fa-heart"></i>
                <i class="far fa-thumbs-up"></i>
                <i class="fas fa-upload"></i>
              </div>
            </div>
            <div class="log-img">
            </div>
          </div>
          <div class="push-log-area">
            <div class="log-title">
              <p><i class="fas fa-user-circle"></i>&nbsp;&nbsp;You Name</p>
              <p>ここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入る</p>

              <div class="icons">
                <i class="far fa-heart"></i>
                <i class="far fa-thumbs-up"></i>
                <i class="fas fa-upload"></i>
              </div>
            </div>
            <div class="log-img">
            </div>
          </div>
          <div class="push-log-area">
            <div class="log-title">
              <p><i class="fas fa-user-circle"></i>&nbsp;&nbsp;You Name</p>
              <p>ここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入るここに投稿記事が入る</p>

              <div class="icons">
                <i class="far fa-heart"></i>
                <i class="far fa-thumbs-up"></i>
                <i class="fas fa-upload"></i>
              </div>
            </div>
            <div class="log-img">
            </div>
          </div>
          <h3>投稿一覧</h3>
          <a href="list.php">登録へ戻る</a>
          <p><a href="logout_act.php">ログアウト</a></p>

          <p><?=$view?>
          </p>


          <!-- 記事の投稿ここまで -->
        </div>
      </div>

      </div>
    </div>







    <!-- 右側のエリア -->
    <div class="right-area">

      <!-- カレンダーエリア -->
      <div class="calendar">
        <div class="right-container">
          <p>ここにカレンダーなど</p>
          <p>ここにカレンダーなど</p>
          <p>ここにカレンダーなど</p>
          <p>ここにカレンダーなど</p>
          <p>ここにカレンダーなど</p>
          <p>ここにカレンダーなど</p>
          <p>ここにカレンダーなど</p>
          <p>ここにカレンダーなど</p>
          <p>ここにカレンダーなど</p>
          <p>ここにカレンダーなど</p>
          <p>ここにカレンダーなど</p>
          <p>ここにカレンダーなど</p>
          <p>ここにカレンダーなど</p>
          <p>ここにカレンダーなど</p>
          <p>ここにカレンダーなど</p>
          <p>ここにカレンダーなど</p>
          <p>ここにカレンダーなど</p>
          <p>ここにカレンダーなど</p>
          <p>ここにカレンダーなど</p>
          <p>ここにカレンダーなど</p>
          <p>ここにカレンダーなど</p>
          <p>ここにカレンダーなど</p>
          <p>ここにカレンダーなど</p>
          <p>ここにカレンダーなど</p>
          <p>ここにカレンダーなど</p>
        </div>
      </div>
    </div>
    <!-- 右側のエリアここまで -->
  </div>

  <?php @include('l-footer.php') ?>
</body>
</html>