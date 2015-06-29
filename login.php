<?php
require('dbconnect.php');

session_start();

if($_COOKIE['email'] !=''){
	$_POST['email'] = $_COOKIE['email'];
	$_POST['password'] = $_COOKIE['password'];
	$_POST['save'] = 'on';
}
if(!empty($_POST)){
	//ログインの処理
	if ($_POST['email'] != '' && $_POST['password'] != ''){
		$sql=sprintf('SELECT * FROM members WHERE email="%s" AND password="%s"',
			mysqli_real_escape_string($db,$_POST['email']),
			mysqli_real_escape_string($db,sha1($_POST['password']))
			);
		$record = mysqli_query($db,$sql) or die(mysqli_error($db));
		if ($table=mysqli_fetch_assoc($record)){
			//ログイン成功
			$_SESSION['id'] = $table['id'];
			$_SESSION['time'] = time();
			//ログイン情報を記録する
			if ($_POST['save'] == 'on'){
				setcookie('email',$_POST['email'],time()+60*60*24*14);
				setcookie('password',$_POST['password'],
				time()+60*60*24*14);
			}
			header('Location: index2.php');
			exit();
		} else {
			$error['login'] = 'failed';
		}
		} else {
			$error['login']='blank';
		}
	}
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
			<meta charset="utf-8">
			<title>ログイン画面</title>
			<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="lead">
			<p>メールアドレスとパスワードを記入してログインしてください。</p>
			<p>入会手続きがまだの方はこちらからどうぞ。</p>
			<p>&raquo;<a href="index.php">入会手続きをする</a></p>
		</div>
		<form action="" method="post">
			<d1>
				<dt>メールアドレス</dt>
				<dd>
				<input type="text" name="email" size="35" maxlength="255" value="<?php echo htmlspecialchars($_POST['email']); ?>"/>
				<?php if($error['login']=='blank'): ?>
				<p class="error">*メールアドレスとパスワードをご記入ください</p>
				<?php endif; ?>
				<?php if($error['login']=='failed'): ?>
				<p class="error">*ログインに失敗しました。正しくご記入ください。</p>
				<?php endif; ?>
				</dd>
				<dt>パスワード</dt>
				<dd>
				<input type="password" name="password" size="35" maxlength="255" value="<?php echo htmlspecialchars($_POST['password']); ?>" />
				</dd>
				<dt>ログイン情報の記録</dt>
				<dd>
				<input id="save" type="checkbox" name="save" value="on"><label for="save">次回からは自動的にログインする</label>
				</dd>
			</d1>
			<div><input type="submit" value="ログインする" /></div>
		</form>
	</body>
</html>