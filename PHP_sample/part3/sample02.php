<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>画面にHTMLを表示する</title>
</head>

<body>
<div id="wrap">
<div id="head">
<h1>画面にHTMLを表示する</h1>
</div>

<div id="content">
<p style="margin-top: 200px">
<?php
print('<h2 style="font-size: 110%; font-weight: bold">画面にHTMLを表示する</h2>');
print('<p>PHPはHTMLの中に埋め込んで記述することができます。</p>');
print('<p>改行するときは、<br />brタグを記述します。</p>');
?>
</p>
</div>

<div id="foot">
<p><img src="images/txt_copyright.png" width="136" height="15" alt="(C) H2O SPACE, Mynavi" /></p>
</div>

</div>
</body>
</html>
