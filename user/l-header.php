<header class="l-header">
  <div class="l-inner d-flex">
    <div class="l-header-logo"><a href="../index.php" class="l-header-logo__link item-center">うぷしょなりー</a></div>
    <ul class="l-header-list flex--auto">
      <li class="l-header-list__item">
        <?php $url = $_SERVER['REQUEST_URI'];
          if (strstr($url, 'list')==true) {
              echo '<a class="item-center l-header-list__link is-current" href="list.php">';
          } else {
              echo '<a class="item-center l-header-list__link" href="list.php">';
          }?>
        <i class="far fa-file-alt l-header__icon"></i>記事一覧</a></li>
      <li class="l-header-list__item">
        <?php $url = $_SERVER['REQUEST_URI'];
          if (strstr($url, 'post')==true) {
              echo '<a class="item-center l-header-list__link is-current" href="post.php">';
          } else {
              echo '<a class="item-center l-header-list__link" href="post.php">';
          }?>
        <i class="fas fa-pencil-alt l-header__icon"></i>投稿する</a></li>
      <li class="l-header-list__item">
        <?php $url = $_SERVER['REQUEST_URI'];
          if (strstr($url, 'search_index')==true) {
              echo '<a class="item-center l-header-list__link is-current" href="search_index.php">';
          } else {
              echo '<a class="item-center l-header-list__link" href="search_index.php">';
          }?>
        <i class="fas fa-search l-header__icon"></i>検索する</a></li>
      <li class="l-header-list__item">
        <?php $url = $_SERVER['REQUEST_URI'];
          if (strstr($url, 'mypage')==true) {
              echo '<a class="item-center l-header-list__link is-current" href="mypage.php">';
          } else {
              echo '<a class="item-center l-header-list__link" href="mypage.php">';
          }?>
        <i class="fas fa-user-circle l-header__icon"></i>マイページ</a></li>
    </ul>
    <div class="item-center l-header-login"><a href="login.php" class="l-header-login__btn">ログイン<i class="fas fa-caret-right l-header-login__arrow"></i></a></div>
  </div>
</header>
<div class="main">