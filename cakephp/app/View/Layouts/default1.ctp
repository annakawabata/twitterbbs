<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>DoDo</title>

		<!-- Bootstrap Core CSS -->
		<link href="/dodo/app/webroot/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="/dodo/app/webroot/css/agency.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="/cakephp/app/webroot/js/jquery.min.js"></script>
		<script src="/cakephp/app/webroot/js/jquery.dropotron.min.js"></script>
		<script src="/cakephp/app/webroot/js/skel.min.js"></script>
		<script src="/cakephp/app/webroot/js/skel-layers.min.js"></script>
		<script src="/cakephp/app/webroot/js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="/cakephp/app/webroot/css/skel.css" />
			<link rel="stylesheet" href="/cakephp/app/webroot/css/style.css" />
		</noscript>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

		<script type="text/javascript" src="http://www.google.com/jsapi"></script>

		<script type="text/javascript">

		//Google Feed Api
		google.load("feeds", "1");

		function initialize() {
		var feed = new google.feeds.Feed("http://nexseed.net/blog/feed/");
		feed.setNumEntries(15);
		feed.load(function(result) {
		if (!result.error) {
		var container = document.getElementById("feed");
		for (var i = 0; i < result.feed.entries.length; i++) {
		var entry = result.feed.entries[i];
		var dd = new Date(entry.publishedDate); // now
		var yearNum = dd.getYear();
		if (yearNum < 2000) yearNum += 1900;
		var m = dd.getMonth() + 1;
		if (m < 10) {m = "0" + m;}
		var d = dd.getDate();
		if (d < 10) {d = "0" + d;}
		var date = yearNum + "." + m + "." + d + " ";
		container.innerHTML += "<li><span>" + date +" </span>" +"　<a href='" + entry.link + "' target='_blank'>" + entry.title + "</a></li>";
		}
		}
		});
		}
		google.setOnLoadCallback(initialize);

		</script>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.4";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top">
		    <div class="container">
		        <!-- Brand and toggle get grouped for better mobile display -->
		        <div class="navbar-header page-scroll">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand page-scroll" href="#page-top" style="font-size:45px">DoDo</a>
		        </div>

		        <!-- Collect the nav links, forms, and other content for toggling -->
		        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		            <ul class="nav navbar-nav navbar-right">
		                <li class="hidden">
		                    <a href="#page-top"></a>
		                </li>
		                <li>
		                    <a class="page-scroll" href="#portfolio">What's "DoDo" ?</a>
		                </li>
		                <li>
		                    <a class="page-scroll" href="#about">"DoDo"の魅力</a>
		                </li>
		                <li>
		                    <a class="page-scroll" href="#team">DoDo Member</a>
		                </li>
		            </ul>
		        </div>
		        <!-- /.navbar-collapse -->
		    </div>
		    <!-- /.container-fluid -->
		</nav>

		        <!-- Collect the nav links, forms, and other content for toggling -->
		        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		            <ul class="nav navbar-nav navbar-right">
		                <li class="hidden">
		                    <a href="#page-top"></a>
		                </li>
		                <li>
		                    <a class="page-scroll" href="#portfolio">What's "DoDo" ?</a>
		                </li>
		                <li>
		                    <a class="page-scroll" href="#about">"DoDo"の魅力</a>
		                </li>
		                <li>
		                    <a class="page-scroll" href="#team">DoDo Member</a>
		                </li>
		            </ul>
		        </div>
		        <!-- /.navbar-collapse -->
		    </div>
		    <!-- /.container-fluid -->
		</nav>
		<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="default.ctp">Home</a></li>
								<li><a href="left-sidebar.html">Life style</a></li>
								<li><a href="right-sidebar.html">Activity</a></li>
								<li><a href="no-sidebar.html">Restrant</a></li>
							</ul>
						</nav>
				</div>
			</div>

		<!-- Featured -->
			<div class="wrapper style2">
				<section class="container">
					<header class="major">
						<h2>DoDoとは？？</h2>
						<span class="byline">NexSeedに関わってるみなさまにセブをおもいっきり満喫してもらうサービスです♡</span>
					</header>
					<!-- Portfolio Grid Section -->
					<section id="portfolio" class="bg-light-gray">
					        <div class="row">
					            <div class="col-md-4 col-sm-6 portfolio-item">
					                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
					                    <div class="portfolio-hover">
					                        <div class="portfolio-hover-content">
					                            <i class="fa fa-plus fa-3x"></i>
					                        </div>
					                    </div>
					                    <img src="/dodo/app/webroot/img/portfolio/cebu_lifestyle.jpg" class="img-responsive" alt="">
					                </a>
					                <div class="portfolio-caption">
					                    <h4>Life Style</h4>
					                    <!-- <p class="text-muted">Graphic Design</p> -->
					                </div>
					            </div>
					            <div class="col-md-4 col-sm-6 portfolio-item">
					                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
					                    <div class="portfolio-hover">
					                        <div class="portfolio-hover-content">
					                            <i class="fa fa-plus fa-3x"></i>
					                        </div>
					                    </div>
					                    <img src="/dodo/app/webroot/img/portfolio/cebu_activity.jpg" class="img-responsive" alt="">
					                </a>
					                <div class="portfolio-caption">
					                    <h4>Activity</h4>
					                    <!-- <p class="text-muted">Website Design</p> -->
					                </div>
					            </div>
					            <div class="col-md-4 col-sm-6 portfolio-item">
					                <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
					                    <div class="portfolio-hover">
					                        <div class="portfolio-hover-content">
					                            <i class="fa fa-plus fa-3x"></i>
					                        </div>
					                    </div>
					                    <img src="/dodo/app/webroot/img/portfolio/cebu_restaurant.jpg" class="img-responsive" alt="">
					                </a>
					                <div class="portfolio-caption">
					                    <h4>Restaurant</h4>
					                    <!-- <p class="text-muted">Website Design</p> -->
					                </div>
					            </div>
					            <!-- <div class="col-md-4 col-sm-6 portfolio-item">
					                <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
					                    <div class="portfolio-hover">
					                        <div class="portfolio-hover-content">
					                            <i class="fa fa-plus fa-3x"></i>
					                        </div>
					                    </div>
					                    <img src="img/portfolio/golden.png" class="img-responsive" alt="">
					                </a>
					                <div class="portfolio-caption">
					                    <h4>Golden</h4>
					                    <p class="text-muted">Website Design</p>
					                </div>
					            </div>
					            <div class="col-md-4 col-sm-6 portfolio-item">
					                <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
					                    <div class="portfolio-hover">
					                        <div class="portfolio-hover-content">
					                            <i class="fa fa-plus fa-3x"></i>
					                        </div>
					                    </div>
					                    <img src="img/portfolio/escape.png" class="img-responsive" alt="">
					                </a>
					                <div class="portfolio-caption">
					                    <h4>Escape</h4>
					                    <p class="text-muted">Website Design</p>
					                </div>
					            </div>
					            <div class="col-md-4 col-sm-6 portfolio-item">
					                <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
					                    <div class="portfolio-hover">
					                        <div class="portfolio-hover-content">
					                            <i class="fa fa-plus fa-3x"></i>
					                        </div>
					                    </div>
					                    <img src="img/portfolio/dreams.png" class="img-responsive" alt="">
					                </a>
					                <div class="portfolio-caption">
					                    <h4>Dreams</h4>
					                    <p class="text-muted">Website Design</p>
					                </div>
					            </div> -->
					        </div>
					    </div>
					</section>

							<div style="float:left;width:400px;">
							<div id="feed"></div>
							<h3>-NexSeed Blog-</h3>
							</div>


							<div style="float:left;width:550px;">
								<div class="fb-page" data-href="https://www.facebook.com/NexSeed" data-width="300" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
								<div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/NexSeed"><a href="https://www.facebook.com/NexSeed">NexSeed</a></blockquote></div>
								</div>
								<h3>-NexSeed facebook-</h3>
		
								</div>
								<div style="float:right;">
								<div class="fb-share-button" data-href="https://www.facebook.com/NexSeed" data-layout="button_count"></div>
								<div class="fb-like"></div>
								</div>
							</div>
					</div>
				</section>
			</div>

		<!-- Main -->
			<div id="main" class="wrapper style1">
				<section class="container">
					<header class="major">
						<h2>These are our recommend!!</h2>
						<span class="byline">他にもまだまだ知ってほしい情報サイトが盛りだくさん！</span>
					</header>
					<div class="row">
					
						<!-- Content -->
							<div class="6u">
								<section>
									<ul class="style">
										<li>
											<div style="float:left;">
											<a href="http://nexseed.net/">
											<img src="/cakephp/app/webroot/images/image1.jpg" border="0" alt="NexSeed" width="90" height="90" align="top"></a>
											<h3>-NexSeed-</h3></div>
											<div style="float:left;width:300px;margin-left:10px;">
											私たちが通っているNexSeedのホームページには意外とみんなが知らないGoodな情報が‼︎<br>
											さらに<a href="http://nexseed.net/blog/">NexSeed Blog</a>には最新情報がたっぷり♡</div></span>
										</li>
										<li>
											<div style="float:left;">
											<a href="http://ceburyugaku.jp/">
											<img src="/cakephp/app/webroot/images/image2.jpg" border="0" alt="NexSeed" width="90" height="90" align="top"></a>
											<h3>-俺セブ-</h3></div>
											<div style="float:left;width:300px;margin-left:10px;">
											<span>４ヶ月の留学経験から得た、<br>
											成功するセブ留学の秘訣をお伝えします！</span>
										</li>
									</ul>
								</section>
							</div>
							<div class="6u">
								<section>
									<ul class="style">
										<li>
											<div style="float:left;">
											<a href="http://www.cebupot.com/">
											<img src="/cakephp/app/webroot/images/cebupot.jpg" border="0" alt="NexSeed" width="90" height="90" align="top"></a>
											<h3>-セブポット-</h3></div>
											<div style="float:left;width:300px;margin-left:10px;">
											<span>セブ島総合情報サイト！<br>
												役立つ情報が盛りだくさん‼︎<br>
												これなしではセブを知れない⁉︎</span>
										</li>
										<li>
											<div style="float:left;">
											<a href="http://goo.gl/D9ESKF">
											<img src="/cakephp/app/webroot/images/tripadvisor.jpg" border="0" alt="NexSeed" width="90" height="90" align="top"></a>
											<h3>-Tripadvisor-</h3></div>
											<div style="float:left;width:300px;margin-left:10px;">
											<span>口コミを参考にして、<br>
												あなたにぴったりな旅を予約しましょう!</span>
										</li>
									</ul>
								</section>
							</div>

					</div>
				</section>
			</div>

			<!-- Team Section -->
			<section id="team" class="bg-light-gray">
			    <div class="container">
			        <div class="row">
			            <div class="col-lg-12 text-center">
			                <h2 class="section-heading">DoDo Member</h2>
			                <h3 class="section-subheading text-muted">DoDoの個性豊かなメンバー</h3>
			            </div>
			        </div>
			        <div class="row">
			            <div class="col-sm-4">
			                <div class="team-member">
			                    <img src="/dodo/app/webroot/img/team/yukiko.jpg" class="img-responsive img-circle" alt="">
			                    <h4>Yukiko Ohara</h4>
			                    <p class="text-muted">美食家</p>
			                    <ul class="list-inline social-buttons">
			                        <!-- <li><a href="#"><i class="fa fa-twitter"></i></a> -->
			                        </li>
			                        <li><a href="https://www.facebook.com/yukiko.ohara.94?ref=ts&fref=ts"><i class="fa fa-facebook"></i></a>
			                        </li>
			                       <!--  <li><a href="#"><i class="fa fa-linkedin"></i></a>
			                        </li> -->
			                    </ul>
			                </div>
			            </div>
			            <div class="col-sm-4">
			                <div class="team-member">
			                    <img src="/dodo/app/webroot/img/team/en2.jpg" class="img-responsive img-circle" alt="">
			                    <h4>En Yamamoto</h4>
			                    <p class="text-muted">セブ愛好家</p>
			                    <ul class="list-inline social-buttons">
			                        <!-- <li><a href="#"><i class="fa fa-twitter"></i></a> -->
			                        </li>
			                        <li><a href="https://www.facebook.com/en.yamamoto.3?fref=ts"><i class="fa fa-facebook"></i></a>
			                        </li>
			                        <!-- <li><a href="#"><i class="fa fa-linkedin"></i></a>
			                        </li> -->
			                    </ul>
			                </div>
			            </div>
			            <div class="col-sm-4">
			                <div class="team-member">
			                    <img src="/dodo/app/webroot/img/team/anna.jpg" class="img-responsive img-circle" alt="">
			                    <h4>Anna Kawabata</h4>
			                    <p class="text-muted">日焼け少女</p>
			                    <ul class="list-inline social-buttons">
			                        <!-- <li><a href="#"><i class="fa fa-twitter"></i></a> -->
			                        </li>
			                        <li><a href="https://www.facebook.com/anna.kawabata.731"><i class="fa fa-facebook"></i></a>
			                        </li>
			                        <!-- <li><a href="#"><i class="fa fa-linkedin"></i></a> -->
			                        </li>
			                    </ul>
			                </div>
			            </div>
			        </div>
			        <div class="row">
			            <div class="col-lg-8 col-lg-offset-2 text-center">
			                <p class="large text-muted"></p>
			            </div>
			        </div>
			    </div>
			</section>

		<!-- Footer -->
		<footer>
		    <div class="container">
		        <div class="row">
		            <div class="col-md-4">
		                <span class="copyright"><font color="#ffffff">Copyright &copy; DoDo 2015</font></span>
		            </div>
		            <div class="col-md-4">
		                <ul class="list-inline social-buttons">
		                    <!-- <li><a href="#"><i class="fa fa-twitter"></i></a> -->
		                    <!-- </li> -->
		                    <li><a href="#"><i class="fa fa-facebook"></i></a>
		                    </li>
		                    <!-- <li><a href="#"><i class="fa fa-linkedin"></i></a> -->
		                    <!-- </li> -->
		                </ul>
		            </div>
		            <!-- <div class="col-md-4">
		                <ul class="list-inline quicklinks">
		                    <li><a href="#">Privacy Policy</a>
		                    </li>
		                    <li><a href="#">Terms of Use</a>
		                    </li>
		                </ul>
		            </div> -->
		        </div>
		    </div>
		</footer>

		<!-- jQuery -->
		<script src="/dodo/app/webroot/js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="/dodo/app/webroot/js/bootstrap.min.js"></script>

		<!-- Plugin JavaScript -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="/dodo/app/webroot/js/classie.js"></script>
		<script src="/dodo/app/webroot/js/cbpAnimatedHeader.js"></script>

		<!-- Contact Form JavaScript -->
		<script src="/dodo/app/webroot/js/jqBootstrapValidation.js"></script>
		<script src="/dodo/app/webroot/js/contact_me.js"></script>

		<!-- Custom Theme JavaScript -->
		<script src="/dodo/app/webroot/js/agency.js"></script>
	</body>
</html>