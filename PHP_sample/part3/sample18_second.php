<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>ログイン情報をログアウトするまで保持する</title>
</head>

<body>
<div id="wrap">
<div id="head">
<h1>ログイン情報をログアウトするまで保持する</h1>
</div>

<div id="content">
<p style="margin-top: 200px">
<p><?php echo $_SESSION['my_id']; ?>さんの情報はまだ残っています</p>
<p><a href="./sample18_logout.php">ログアウトする</a></p>
</p>
</div>

<div id="foot">
<p><img src="images/txt_copyright.png" width="136" height="15" alt="(C) H2O SPACE, Mynavi" /></p>
</div>

</div>
</body>
</html>
