<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DoDo</title>

    <!-- Bootstrap Core CSS -->
    <link href="/dodo/app/webroot/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/dodo/app/webroot/css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/dodo/app/webroot/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
   
    <script src= "http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
    <script src="http://www.google.com/jsapi" type="text/javascript"></script>
    <script type="text/javascript">
    google.load("feeds", "1"); //APIを読み込みます

    function initialize(){
        
        var feed = new google.feeds.Feed("http://nexseed.net/blog/feed/"); //読み込むRSSフィードを設定します
        var noPhoto = ("/dodo/app/webroot/img/portfolio/cebu_lifestyle.jpg"); //画像がなかった場合に表示する画像を指定します
        
        feed.setNumEntries(3); //記事を読み込む件数を設定します
        feed.load(dispfeed);
        
        function dispfeed(result){

            if(!result.error){
                var container = document.getElementById("feed"); //HTMLに書き出す対象のIDを指定します

                for (var i = 0; i < result.feed.entries.length; i++) {

                    var entry = result.feed.entries[i];

                    var entryImg = "";
                    var imgCheck = entry.content.match(/(src="http:)[\S]+((\.jpg)|(\.JPG)|(\.jpeg)|(\.JPEG)|(\.gif)|(\.GIF)|(\.png)|(\.PNG))/); //画像のチェックをします　拡張子はここで増やします
                    if(imgCheck){
                        entryImg += '<img ' + imgCheck[0] + '" >';
                        } else {
                            entryImg += noPhoto;
                    }

                    container.innerHTML += '<li>' 
                    + '<h3>'
                    + entry.title + '</h3>'
                    + '<div class="imgbox" id="img' + i + '">' + entryImg + '</div>' 
                    + '<a href="' + entry.link + '">more...</a>'
                    + '</li>';
                    
                    var element = $('#img' + i + ' img');

                    var img = new Image();
                    img.src = element.attr('src');
                    var width = img.width;
                    var height = img.height;
                    if(width / height > 200/200){
                        $('#img' + i + ' img').css('height', 200);
                        $('#img' + i + ' img').css('width', 300 * width / height);
                    }else{
                        $('#img' + i + ' img').css('height', 200 * height / width);
                        $('#img' + i + ' img').css('width', 300);
                    }

                }

                var linkBlank = container.getElementsByTagName('a'); // targetに'_blank'を設定します。不要な場合は、以下4行を削除
                for (var j = 0, l = linkBlank.length; j < l; j++) {
                    linkBlank[j].target = '_blank';
                } //target'_blank'ここまで
            }
        }
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

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
                        <a class="page-scroll" href="#about">"DoDo 新着情報"</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">"DoDo Member"</a>
                    </li>
                    <li>
                    <button type="button" class="btn btn-warning"><?php echo $this->Html->link('ログアウト',
                    array('controller' => 'users', 'action' => 'logout')); ?></button>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading">What's Do you want<br>to Do!?</div>
            </div>
        </div>

    </header>

    <!-- Services Section -->
    <!-- <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">What's "DoDo"?</h2>
                    <h3 class="section-subheading text-muted">DoDoは、NEXSEEDに関わってるみんながセブをおもいっきり満喫してもらうサービスです</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Life Style</h4>
                    <p class="text-muted">トイレットペーパーってどこが安いの？っていう主婦的情報から、おしゃれスッポトなんかの最新情報まで、出てこいや！！</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Activity</h4>
                    <p class="text-muted">セブといえば海、海、海でしょ！！でも海以外もあるんです！！</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Restaurant</h4>
                    <p class="text-muted">セブをなめないで下さい。フィリピン料理だけのはずないでしょ。</p>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">What's "DoDo"?</h2>
                    <h3 class="section-subheading text-muted">DoDoは、NEXSEEDに関わってるみなさんにセブをおもいっきり満喫してもらうサービスです</h3>
                </div>
            </div>
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
            </div>
        </div>
    </section>

    <!-- 投稿新着情報表紙 -->

    <div id="main" class="wrapper style1">
        <section class="container">
            <div class="col-lg-12 text-center">

                <div id="about">
    
                <?php echo $this->Session->flash(); ?>

                <?php echo $this->fetch('content'); ?>
                </div>
            </div>
        </section>
    </div>
    <section id="portfolio" class="bg-light-gray">

    <div id="main" class="wrapper style1">
        <section class="container">
            <div class="col-lg-12 text-center">
                <div style="float:center;">
                    <a href="http://nexseed.net/">
                    <img src="/cakephp/app/webroot/images/nexseed.jpg" width="1100px" height="200px"></a>
                </div>
            </div>
        </section>
    </div>
    <!-- NexSeed -->

    <div id="main" class="wrapper style1">
        <section class="container">
            <div class="col-lg-12 text-center">
    <div style="float:left;width:500px;height:600;font-size:29px;">
    <ul class="demo1">

    <ul class="demo1">
        <div id="feed"></div>
    </ul>

    <a href="http://nexseed.net/blog/"><h3>-NexSeed Blog-</h3></a>
    </ul>

    </div>
    <div style="float:left;width:600px;border-left:1px solid yellow;line-height:1.0em;">
        <div class="fb-page" data-href="https://www.facebook.com/NexSeed" data-width="550" data-height="1020" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
        <div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/NexSeed"><a href="https://www.facebook.com/NexSeed">NexSeed</a></blockquote></div>
        </div>
        <h3>-NexSeed facebook-</h3>
        </div>           
        
        <!--<div style="float:right;">
        <div class="fb-share-button" data-href="https://www.facebook.com/pages/DoDo/1703096336580876?fref=ts" data-layout="button_count"></div>
        <div class="fb-like"></div>
        </div>
        </div>-->
    </section>
    </div>
    
    </div>
    </section>

    <!-- Main -->
        
            <section class="container">
                
                <div class="col-lg-12 text-center ">
                <h1>These are our recommend!!</h1>
                    <h2><span class="byline">他にもまだまだ知ってほしい情報サイトが盛りだくさん！</span></div>
                <div class="row">
                
                    <!-- Content -->
                        <div class="6u">
                            <div class="col-lg-12 text-center">
                            <section>
                                <ul class="style">

                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 portfolio-item">
                                            <a href="http://ceburyugaku.jp/">
                                                <div class="portfolio-hover">
                                                    <div class="portfolio-hover-content">
                                                    </div>
                                                </div>
                                                <img src="/cakephp/app/webroot/images/image2.jpg" class="img-responsive" alt="">
                                            </a>
                                            <div class="portfolio-caption">
                                                <h3>俺のセブ島留学</h3>
                                                <!-- <p class="text-muted">Graphic Design</p> -->
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 portfolio-item">
                                            <a href="http://www.cebupot.com/">
                                                <div class="portfolio-hover">
                                                    <div class="portfolio-hover-content">
                                                    </div>
                                                </div>
                                                <img src="/cakephp/app/webroot/images/cebupot.jpg" class="img-responsive" alt="">
                                            </a>
                                            <div class="portfolio-caption">
                                                <h3>Cebu pot</h3>
                                                <!-- <p class="text-muted">Website Design</p> -->
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 portfolio-item">
                                            <a href="http://goo.gl/D9ESKF">
                                                <div class="portfolio-hover">
                                                    <div class="portfolio-hover-content">
                                                </div>
                                                <img src="/cakephp/app/webroot/images/tripadvisor.jpg" class="img-responsive" alt="">
                                                </a>
                                                <div class="portfolio-caption">
                                                <h3>Tripadvisor</h3>
                                                <!-- <p class="text-muted">Website Design</p> -->
                                                </div>
                                                </div>
                                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                 </div>
            </section>
    
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
                            <li><a href="https://www.facebook.com/yukiko.ohara.94?fref=ts"><i class="fa fa-facebook"></i></a>
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

    <!-- Clients Aside -->
    <!-- <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside> -->
    
    <!-- Contact Section -->
    <!-- <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> -->

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
                        <li><a href="https://www.facebook.com/pages/DoDo/1703096336580876?fref=ts"><i class="fa fa-facebook"></i></a>
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

