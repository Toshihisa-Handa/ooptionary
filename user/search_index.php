<?php 
//検索ページ作成

//①データ取得ロジックを呼び出す
include_once('search_model2.php');

$userData = getUserData($_GET);

?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHPの検索機能</title>
<?php include('l-header-css.php') ?>
<!-- <link rel="stylesheet" href="style.css"> -->
<!-- <link rel="stylesheet" href="../css/list.css"> -->
</head>
<body>
  <?php include('l-header.php') ?>
<div class="container">
<h1 class="col-xs-6 col-xs-offset-3">検索フォーム</h1>
<div class="col-xs-6 col-xs-offset-3 well">

	<?php //②検索フォーム ?>
	<form method="get">
		<div class="form-group">
			<label for="InputName">名前</label>
			<input name="name" class="form-control" id="InputName" value="<?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '' ?>">
		</div>
		<div class="form-group">
			<label for="InputTitle">タイトル</label>
            <input name="title" class="form-control" id="InputTitle" value="<?php echo isset($_GET['title']) ? htmlspecialchars($_GET['title']) : '' ?>">
			
		</div>
		<div class="form-group">
			<label for="InputNaiyou">内容</label>
            <input name="naiyou" class="form-control" id="InputNaiyou" value="<?php echo isset($_GET['naiyou']) ? htmlspecialchars($_GET['naiyou']) : '' ?>">
		</div>
		<button type="submit" class="btn btn-default" name="search">検索</button>
	</form>

</div>
<div class="col-xs-6 col-xs-offset-3">
	<?php //③取得データを表示する ?>
	<?php if(isset($userData) && count($userData)): ?>
		<p class="alert alert-danger">検索対象は見つかりませんでした。</p>
		<table class="table">
			<thead>
				<tr>
					<th>名前</th>
					<th>タイトル</th>
					<th>内容</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($userData as $row): ?>
					<!-- <tr>
						<td><?php echo htmlspecialchars($row['name']) ?></td>
						<td><?php echo htmlspecialchars($row['title']) ?></td>
						<td><?php echo htmlspecialchars($row['naiyou']) ?></td>
					</tr> -->
				<?php endforeach; ?>
			</tbody>
		</table>
	<?php else: ?>
		<!-- <p class="alert alert-danger">検索対象は見つかりませんでした。</p> -->
        <p class="alert alert-success">1件見つかりました。</p>
        <table class="table">
			<thead>
				<tr>
					<th>名前</th>
					<th>タイトル</th>
					<th>内容</th>
				</tr>
			</thead>
			<tbody>
					<tr>
						<td>ほんま</td>
						<td>ノラネコぐんだん パンこうじょう</td>
						<td>猫にパンを盗まれた！！！<br><br><a href="https://www.ehonnavi.net/ehon/87432/%E3%83%8E%E3%83%A9%E3%83%8D%E3%82%B3%E3%81%90%E3%82%93%E3%81%A0%E3%82%93%E3%83%91%E3%83%B3%E3%81%93%E3%81%86%E3%81%98%E3%82%87%E3%81%86/">
						→参考：ノラネコぐんだん パンこうじょう</a></td>
					</tr>
			</tbody>
		</table>
	<?php endif; ?>
	</div>
</div>
</body>
</html>
