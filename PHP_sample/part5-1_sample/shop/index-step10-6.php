<?php
require('dbconnect.php');

$page = $_REQUEST['page'];
if ($page == '') {
	$page = 1;
}
$page = max($page, 1);

// 最終ページを取得する
$sql = 'SELECT COUNT(*) AS cnt FROM my_items';
$recordSet = mysqli_query($db, $sql);
$table = mysqli_fetch_assoc($recordSet);
$maxPage = ceil($table['cnt'] / 5);
$page = min($page, $maxPage);

$start = ($page - 1) * 5;
$recordSet = mysqli_query($db, 'SELECT m.name, i.* FROM makers m, my_items i WHERE m.id=i.maker_id ORDER BY id DESC LIMIT ' . $start. ',5');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>商品管理</title>
</head>

<body>
<div id="wrap">
<div id="head">
<h1>商品管理</h1>
</div>

<div id="content">
	<table width="100%">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">メーカー</th>
			<th scope="col">商品名</th>
			<th scope="col">価格</th>
		</tr>
<?php
while ($table = mysqli_fetch_assoc($recordSet)) {
?>
		<tr>
			<td><?php print(htmlspecialchars($table['id'])); ?></td>
			<td><?php print(htmlspecialchars($table['name'])); ?></td>
			<td><?php print(htmlspecialchars($table['item_name'])); ?></td>
			<td><?php print(htmlspecialchars($table['price'])); ?></td>
		</tr>
<?php
}
?>
	</table>

<ul class="paging">
<li><a href="index.php?page=<?php print($page - 1); ?>">前のページへ</a></li>
<li><a href="index.php?page=<?php print($page + 1); ?>">次のページへ</a></li></ul>

</div>

<div id="foot">
<p><img src="images/txt_copyright.png" width="136" height="15" alt="(C) H2O SPACE, Mynavi" /></p>
</div>

</div>
</body>
</html>
