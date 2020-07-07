<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>トップページ | うぷしょなりー</title>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="css/toppage.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header-logo"><a href="index.php" class="header-logo__link">うぷしょなりー</a></h1>
            <nav class="gnav">
                <ul class="gnav__list">
                    <li class="gnav__item"><a href="#link1" class="gnav__link">特徴</a></li>
                    <li class="gnav__item"><a href="#link2" class="gnav__link">使い方</a></li>
                    <li class="gnav__item"><a href="user/login.php" class="gnav__link">ログイン</a></li>
                    <li class="gnav__item"><a href="user/list.php" class="gnav__btn">投稿を見る<i class="fas fa-caret-right btn__arrow"></i></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="main">
        <div class="mv">
            <div class="mv__bg">
                <div class="mv__inner">
                    <div class="mv-copy">
                        <h2 class="mv-copy__title">あなたのエラーは探せる・解決できる</h2>
                        <div class="mv-copy__text">人には、聞けない。ググってもでない。<br>
                            答えではなく、エラーから探すをコンセプトに、<br>
                            誰もが経験する、プログラミング初学者にありがちな、<br>エラーの事象と解決策を探すことができます。</div>
                        <a href="user/list.php" class="btn">投稿を見る<i class="fas fa-caret-right btn__arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <section class="intro index-sec" id="link1">
            <div class="l-inner">
                <div class="index-sec__title">
                    <h2 class="index-sec__title--ja">特徴</h2>
                    <span class="index-sec__title--en">FEATURE</span>
                </div>
                <div class="index-sec__lead">今更きけないエラー、ググっても出てこないエラー<br>
                    「うぷしょなりー」は、誰もが一度は、ハマってしまうエラーや解決策を<br>
                    ハマった人の言葉で、データベース化し検索できるオンラインディクショナリーです。<br>
                    専門的な言語化は、一切不要。<br>
                    あなたが、体験した事象や感情をあなたの言葉で検索・綴ってください。</div>
                <div class="index-sec__lead">人に言うのは恥ずかしい、聞けない。<br>小さなエラーに数時間かけてしまい、本来取り組むべき学習時間を削ってしまう。</div>
                <div class="index-sec__lead">誰かがハマった小さなエラーを紡ぐことで、<br>未来の誰かがもっと取り組むべき学習に取り組めるようになる。<br>悩みは、苦悩。考えるは思考。<br>さぁ、あなたのエラーを解決しましょう。</div>
                <ul class="intro-list">
                    <li class="intro-list__item">
                        <div class="intro-list__icon"><i class="fas fa-book"></i></div>
                        <div class="intro-list__body">
                            <h3 class="intro-list__title">エラーから、<br>検索する。</h3>
                            <p class="intro-list__text">本サイトでは、エラー事象や、悩みごとから検索をすることができます。
                                専門的な言語でなくとも、あなたがつまづいたエラー事象・状況をそのまま検索してみましょう。</p>
                        </div>
                    </li>
                    <li class="intro-list__item">
                        <div class="intro-list__icon"><i class="fas fa-pencil-alt"></i></div>
                        <div class="intro-list__body">
                            <h3 class="intro-list__title">エラーを<br>綴る</h3>
                            <p class="intro-list__text">あなたが直面したエラー事象や感情を解決策とセットにし、あなたの言葉で、綴ってみましょう。あなたの、エラーは同じ悩みを抱える誰かのエラーを救います。</p>
                        </div>
                    </li>
                    <li class="intro-list__item">
                        <div class="intro-list__icon"><i class="fas fa-heart"></i></div>
                        <div class="intro-list__body">
                            <h3 class="intro-list__title">エラーに<br>いいねしよう❤︎</h3>
                            <p class="intro-list__text">誰かのエラーに共感できたら、いいねしてみましょう。<br>
                                いいねってテンション上がってポジティブになりますよね。<br>
                                世の中に答えが溢れ、エラーって私だけかも、なんで私だけわからないんだろうと塞ぎ込みがちの世の中かもしれません。<br>
                                あなたのいいねで、世の中をもっと「ごきげん」にしましょう。</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="use index-sec" id="link2">
            <div class="l-inner">
                <div class="index-sec__title">
                    <h2 class="index-sec__title--ja">使い方</h2>
                    <p class="index-sec__title--en">HOW TO USE</p>
                </div>
                <div class="index-sec__lead">他の検索サイトと同じように、検索BOXから、あなたが探している、エラー解決方法が検索できます。<br>もちろん、ログイン不要。<br>ただし、投稿には登録ログインが必要になります。
                </div>
                <ul class="use-list">
                    <li class="use-list__item">
                        <div class="use-list__img"></div>
                        <div class="use-list__body">
                            <p class="use-list__num">01</p>
                            <h3 class="use-list__title">トップページから解決策を探す</h3>
                            <div class="use-list__text">トップページの検索窓から、あなたの解決策を検索できます。<br>
                                あなたのエラーが解決できたら、いいねを押してね❤︎<br>
                                ログイン・登録は必要なく、誰でも調べることができます。</div>
                        </div>
                    </li>
                    <li class="use-list__item">
                        <div class="use-list__img"></div>
                        <div class="use-list__body">
                            <p class="use-list__num">02</p>
                            <h3 class="use-list__title">マイページからエラーを投稿する</h3>
                            <div class="use-list__text">マイページからあなたのエラーを投稿できます。</div>
                        </div>
                    </li>
                    <li class="use-list__item">
                        <div class="use-list__img"></div>
                        <div class="use-list__body">
                            <p class="use-list__num">03</p>
                            <h3 class="use-list__title">登録しよう。</h3>
                            <div class="use-list__text">登録は、簡単。<br>
                                名前とメールアドレス・IDとパスワードを入力するだけ。<br>
                                パスワードは、忘れないように管理をしましょう。</div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="cta index-sec">
            <div class="cta-content">
                <h2 class="cta-content__title">Let’s Ooops!</h2>
                <p class="cta-content__text">さー、あなたのエラーと解決策を探してみよう。</p>
                <a class="cta-content__btn" href="user/list.php">投稿を見る<i class="fas fa-caret-right btn__arrow"></i></a>
            </div>
        </section>
    </main>
    <footer class="footer">
        <p class="copyright">&copy; 2020 Oopsionary.</p>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>