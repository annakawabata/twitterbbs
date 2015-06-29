<?php require('Mobile_Detect.php'); ?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<title>ソフトウェアダウンロード</title>
</head>
<body>
<?php $md = new Mobile_Detect(); ?>
<?php if ($md->isiOS()): ?>

<!-- iOSの場合 -->
<a href="https://itunes.apple.com/jp/app/google-maps/
id585027354?mt=8&uo=4" target="itunes_store"style="display:inline-block;overflow:hidden;background:url(https://linkmaker.itunes.apple.com/htmlResources/assets/ja_jp//images/web/linkmaker/badge_appstore-lrg.png) no-repeat;width:135px;height:40px;@media onlyscreen{background-image:url(https://linkmaker.itunes.apple.com/htmlResources/assets/ja_jp//images/web/linkmaker/badge_appstorelrg.
svg);}"></a>
<?php elseif ($md->isAndroidOS()): ?>
<!-- Androidの場合 -->
<a href="https://play.google.com/store/apps/details?id=com.google.earth">
<img alt="Android app on Google Play"
src="https://developer.android.com/images/brand/ja_app_rgb_wo_45.png" />
</a>
<?php else: ?>
<!-- PCなどの場合 -->
<a href="https://itunes.apple.com/jp/app/google-maps/
id585027354?mt=8&uo=4" target="itunes_store"style="display:inline-block;overflow:hidden;background:url(https://linkmaker.itunes.apple.com/htmlResources/assets/ja_jp//images/web/linkmaker/badge_appstore-lrg.png) no-repeat;width:135px;height:40px;@media onlyscreen{background-image:url(https://linkmaker.itunes.apple.com/htmlResources/assets/ja_jp//images/web/linkmaker/badge_appstorelrg.svg);}"></a>
<a href="https://play.google.com/store/apps/details?id=com.google.
earth">
<img alt="Android app on Google Play"
src="https://developer.android.com/images/brand/ja_app_rgb_
wo_45.png" />
</a>
<?php endif; ?>
</body>
</html>