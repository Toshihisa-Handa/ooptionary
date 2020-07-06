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
$stmt = $pdo->prepare('SELECT * FROM user_oops_table WHERE name=:name');
$stmt->bindValue(':name',$_SESSION["name"], PDO::PARAM_INT);
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
     $view.='<div class="card">
     <h5 class="card-header"> 
       <div class="sumnail">
        <i class="fas fa-user-circle"></i>';
     $view.=$r["name"].'</div> </h5>
     <div class="card-body">
       <h5 class="card-title">';
      $view.=$r["title"].'</h5> <p class="card-text text">';
      $view.=$r["naiyou"].'</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
      <i class="fas fa-trash-alt"></i>
      <i class="fas fa-redo-alt"></i>
    </div></div>';







        // //更新用リンクを埋め込んだ表示コード(元のselect.phpから修正する箇所)
        // $view .='<p>';
        // // $view .='<a href="u_view.php? id='.$r["id"].'">';
        // $view .=$r["indate"].":".$r["name"].":".$r["title"].'<br>'.$r["naiyou"];
        // // $view .='</a>';
        // //以下はupdateのリンクタグの記述
        // $view .='  ';
        // $view .='<a href="u_view.php? id='.$r["id"].'">';
        // $view .='[更新]';
        // $view .='</a>';
        // //以下はdeleteのリンクタグの記述
        // $view .='  ';
        // $view .='<a href="delete.php? id='.$r["id"].'">';
        // $view .='[削除]';
        // $view .='</a>';
        // $view .='</p>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include('l-header-css.php') ?>
  <style>
    .card{
      overflow: hidden;
      margin:0 0 30px ;
    }
    .text{
      display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    overflow: hidden; 
    }
  </style>
</head>
<body>
<?php include('l-header.php') ?>

<div class="container">

<div class="card">
  <h5 class="card-header"> 
    <div class="sumnail">
     <i class="fas fa-user-circle"></i>
       のりお
     </div>
    </h5>
  <div class="card-body">
    <h5 class="card-title">｢人生というものは本当に分からない｣という経験をしたことがありますか？男性です。</h5>
    <p class="card-text text">29 で結婚しましたが、それまで、女性とは会えてもせいぜい一度だけ。もてる経験をしたことがありませんでした。

38 の時に、音楽関係で、23 の女性と出会いました。演奏会に一緒に行ったり、娘のように大切に思い、付き合っている人も紹介されました。そのうちに、彼女は留学することになり、何か役に立てることはないかと調べ、見送りました。その後、現地で知り合った別の国からの留学生と結婚することになったと聞きました。

数年後、彼女がお嬢さんを連れて訪ねてきました。結婚相手が全然働かないので、見切って離婚してきたと。

何と不幸なことと思いましたが、ともかくお嬢さんと生き別れにならなくてよかったとしか言えませんでした。

二三年して、連絡を貰いました。私と愛し合いたいと。私が結婚していることはわかっているし、結婚を求めることはないから、愛して欲しいと。15 の年齢差は変わりませんが、最初に会ってから十年経っていますから、大人の女性と見ることはできました。相手の意思を尊重して会いましたが、率直に言って緊張し過ぎて、入ることができませんでした。彼女はそれでも、自分は愛し合ったと思っていると言ってくれました。

その後、定期的に会うことになりました。初回は避妊具を使ったのですが、彼女は自分は排卵の瞬間がわかると言い、避妊具を使わないことを望みました。不安が拭えませんでしたが、肌を接したい欲望が勝ちました。それから一年ほど、毎月日程を合わせて逢いました。

彼女は、大変敏感な女性で、耳に息を吹きかけるだけで息が激しくなります。それに優しく手で触れるだけで、絶頂を迎えました。その声を聞くことが私の喜びで、二度目からは最後まで愛することができました。生まれて初めて、心から女性を愛することができたと思いました。

その後、彼女から、もうこれは止めようと言い出して、愛することは終わりになりました。でも、今でもよい音楽仲間です。

しばらく経ってから思い返し、やはり妊娠の不安があったのだろうと反省し、なぜ自分が避妊手術を受けなかったかと、後悔しました。
.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


<div class="card">
  <h5 class="card-header"> 
    <div class="sumnail">
     <i class="fas fa-user-circle"></i>
       ひろこ
     </div>
    </h5>
  <div class="card-body">
    <h5 class="card-title">「知る」のは「あまりにも恐ろしい事実」は何かありますか？</h5>
    <p class="card-text text">海に四角のような模様ができているのを見かけたら、命を落とす可能性が高いので、すぐに水から離れることを強くおすすめします。
    実は、波には多くの種類があることをご存知でしたか？ ビーチでは、このタイプの波が海岸線に押し寄せるのがよく目撃されています。。
    方形波は、風が一定の方向から同じ向きに吹き続け、反対方向からの波とぶつかることで発生します。ぶつかった波は、新しく吹く風によって曲がります。これにより、四角形状の波ができあがるのです。
.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
    <i class="fas fa-trash-alt"></i>
    <i class="fas fa-redo-alt"></i>
  </div>
</div>

<div class="card">
  <h5 class="card-header"> 
    <div class="sumnail">
     <i class="fas fa-user-circle"></i>
       ここに名前
     </div>
    </h5>
  <div class="card-body">
    <h5 class="card-title">ここにタイトル</h5>
    <p class="card-text text">ここに本文</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<?=$view?>


<!-- 末尾の閉じタグ -->
</div>
<?php @include('l-footer.php') ?>
</body>
</html>