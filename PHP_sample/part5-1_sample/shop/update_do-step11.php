<?php
require('dbconnect.php');
$sql = sprintf('UPDATE my_items SET maker_id=%d, item_name="%s",
price=%d, keyword="%s" WHERE id=%d',
mysqli_real_escape_string($db, $_POST['maker_id']),
mysqli_real_escape_string($db, $_POST['item_name']),
mysqli_real_escape_string($db, $_POST['price']),
mysqli_real_escape_string($db, $_POST['keyword']),
mysqli_real_escape_string($db, $_POST['id'])
);
mysqli_query($db, $sql) or die(mysqli_error($db));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>商品情報変更</title>
</head>

<body>
<div id="wrap">
<div id="head">
<h1>商品情報変更</h1>
</div>

<div id="content">
<p>商品の情報を変更しました</p>
</div>

<div id="foot">
<p><img src="images/txt_copyright.png" width="136" height="15" alt="(C) H2O SPACE, Mynavi" /></p>
</div>

</div>
</body>
</html>
