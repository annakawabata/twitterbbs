<?php
session_start();
require('dbconnect.php');
if(empty($_REQUEST['id'])){
	header('location: http://' . $_SERVER['HTTP_HOST'] . '/Twitter_bbs/index2.php');
	exit();
}
//投稿を取得する
$sql = sprintf('SELECT m.name , m.picture , p.* FROM members m, posts p WHERE m.id=p.member_id AND p.id=%d ORDER BY p.created DESC',
				mysqli_real_escape_string($db, $_REQUEST['id'])
);
$posts = mysqli_query($db, $sql) or die(mysqli_error($db));
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<meta http-equive="Content-Type" content="text/html"; charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="all">
<title>ひとこと掲示板</title>
<head>

<div id="wrap">
	<div id="head">
		<h1>ひとこと掲示板</h1>
	</div>
	<div id="content">
	<p>&laquo;<a href="index2.php">一覧にもどる</a></p>
	<?php
	if($post = mysqli_fetch_assoc($posts)):
	?>
	<div class="msg">
	<img src="member_picture/<?php echo htmlspecialchars($post['picture'] , ENT_QUOTES , 'UTF-8')  ?>" width="48" alt="<?php echo htmlspecialchars($post['name'] , ENT_QUOTES , 'UTF-8'); ?>" />
	<p>
		<?php echo htmlspecialchars($post['message'] , ENT_QUOTES , 'UTF-8'); ?>
		<span class="name">
			(<?php echo htmlspecialchars($post['name'] , ENT_QUOTES , 'UTF-8'); ?>)
		</span>
	</p>
	<p class="day"><?php echo htmlspecialchars($post['created'] , ENT_QUOTES , 'UTF-8'); ?></p>
	<?php
	else:
	?>
	<p>その投稿は削除されたか、URLが間違えています</p>
	<?php
	endif;
	?>
	</div>
	</div>
</body>
</html>