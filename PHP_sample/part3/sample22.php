<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>書式を整える</title>
</head>

<body>
<div id="wrap">
<div id="head">
<h1>書式を整える</h1>
</div>

<div id="content">
<h2>日付を2ケタで表示する</h2>
<?php
$date = sprintf('%04d年 %02d月 %02d日', 2010, 1, 23);
?>
<?php
print($date);
?>
</div>

<div id="foot">
<p><img src="images/txt_copyright.png" width="136" height="15" alt="(C) H2O SPACE, Mynavi" /></p>
</div>

</div>
</body>
</html>
