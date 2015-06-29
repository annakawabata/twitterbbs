<?php
$db = mysqli_connect('localhost', 'root', '', 'mydb') or die(mysqli_connect_error());
mysqli_set_charset($db, 'utf8');
$sql = 'INSERT INTO my_items SET maker_id=' . mysqli_real_escape_string($db, $_POST['maker_id']) . ', item_name="' . mysqli_real_escape_string($db, $_POST['item_name']) . '", price=' . mysqli_real_escape_string($db, $_POST['price']) . ', keyword="' . mysqli_real_escape_string($db, $_POST['keyword']) . '"';
mysqli_query($db, $sql) or die(mysqli_error($db));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>商品登録</title>
</head>

<body>
<div id="wrap">
<div id="head">
<h1>商品登録</h1>
</div>

<div id="content">
<p>商品を登録しました</p>
</div>

<div id="foot">
<p><img src="images/txt_copyright.png" width="136" height="15" alt="(C) H2O SPACE, Mynavi" /></p>
</div>

</div>
</body>
</html>
