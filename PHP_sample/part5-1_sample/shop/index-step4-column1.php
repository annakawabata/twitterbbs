<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>MySQLに接続する</title>
</head>

<body>
<div id="wrap">
<div id="head">
<h1>トップページ</h1>
</div>

<div id="content">
<?php
$db = mysqli_connect('localhost', 'root', '', 'mydb') or die(mysqli_connect_error());
mysqli_set_charset($db, 'utf8');
mysqli_query($db, 'UPDATE my_items SET item_name="白桃" WHERE id=6') or die(mysqli_error($db));
echo '変更しました';
?>
</div>

<div id="foot">
<p><img src="images/txt_copyright.png" width="136" height="15" alt="(C) H2O SPACE, Mynavi" /></p>
</div>

</div>
</body>
</html>
