<?php require("./app_id.php"); ?>
<?php require("./curl.php"); ?>
<!doctype html>
<!--[if lt IE 7 ]><html lang="ja" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="ja" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="ja" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="ja" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="ja" class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="keywords" content="レビュー,新着,ヤフー,Yahoo!,ショッピング,商品<?php
if($id!=1){
    echo ",".str_replace("、", ",", $resC["ResultSet"][0]["Result"]["Categories"]["Current"]["Title"]["Medium"]);
}
?>" />
<meta name="description" content="<?php
if($id==1){
    echo "Yahoo!ショッピングから最新のレビューをお届けします。";
}else{
    echo "Yahoo!ショッピングから".$resC["ResultSet"][0]["Result"]["Categories"]["Current"]["Title"]["Medium"]."の最新口コミ情報をお届けします。";
}
?>" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?php
    if($id==1){
        echo "みんなの新着レビュー - 最新の口コミ情報をお届け！";
    }else{
        echo $resC["ResultSet"][0]["Result"]["Categories"]["Current"]["Title"]["Medium"]."の新着レビュー - みんなの新着レビュー";
    }
?></title>
<!-- main JS libs -->
<script src="js/libs/modernizr.min.js"></script>
<script src="js/libs/jquery-1.10.0.js"></script>
<script src="js/libs/jquery-ui.min.js"></script>
<script src="js/libs/bootstrap.min.js"></script>

<!-- Style CSS -->
<link href="css/bootstrap.css" media="screen" rel="stylesheet">
<link href="style.css" media="screen" rel="stylesheet">
<link href="my.css" media="screen" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- scripts -->
<script src="js/general.js"></script>

<!--[if lt IE 9]><script src="js/respond.min.js"></script><![endif]-->
<!--[if gte IE 9]>
<style type="text/css">
    .gradient {filter: none !important;}
</style>
<![endif]-->

<link rel="shortcut icon" href="./image/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="icon" href="./image/favicon.ico" type="image/vnd.microsoft.icon" />

<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'ja'}
</script>
</head>

<body id="top">
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W9BGVV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W9BGVV');</script>
<!-- End Google Tag Manager -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="link is-pc">
    <a href="http://tiger4th.com/">tiger4th.com</a>
</div>

<div class="container container-wide">

<!-- content -->
<div class="content " role="main">
<!-- row -->
<div class="row">
<div class="col-sm-4">
    <!-- Website Menu -->
    <div class="logo">
        <a href="index.php?id=1&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>&price=<?php echo $price; ?>">
            <img src="./image/logo.png" alt="みんなの新着レビュー"/>
        </a>
    </div>
    <!--/ Website Menu -->
    <br><br>
</div>

<div class="col-sm-8 is-pc">
    <div class="head-ad">
        <!-- admax -->
        <script src="http://adm.shinobi.jp/s/53ef44afc127bc67dcee549a289d6c74"></script>
        <!-- admax -->
    </div>
    <br><br>
</div>
</div>
<!--/ row -->

<!-- row -->
<div class="row">
<div class="col-sm-4">
    <div class="widget-container boxed category">
        <?php if ($id == 1) { ?>
        <h1 class="widget-title">商品カテゴリ</h1>
        <div class="inner list-group">
                <a class="list-group-item" href="index.php?id=13457&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>&price=<?php echo $price; ?>"><i class="fa fa-female fa-fw"></i>ファッション</a>
                <a class="list-group-item" href="index.php?id=2498&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>&price=<?php echo $price; ?>"><i class="fa fa-cutlery fa-fw"></i>食品</a>
                <a class="list-group-item" href="index.php?id=2513&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>&price=<?php echo $price; ?>"><i class="fa fa-fire fa-fw"></i>レジャー、アウトドア</a>
                <a class="list-group-item" href="index.php?id=2500&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>&price=<?php echo $price; ?>"><i class="fa fa-medkit fa-fw"></i>ダイエット、健康</a>
                <a class="list-group-item" href="index.php?id=2501&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>&price=<?php echo $price; ?>"><i class="fa fa-tint fa-fw"></i>コスメ、香水</a>
                <a class="list-group-item" href="index.php?id=2502&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>&price=<?php echo $price; ?>"><i class="fa fa-laptop fa-fw"></i>パソコン、周辺機器</a>
                <a class="list-group-item" href="index.php?id=2504&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>&price=<?php echo $price; ?>"><i class="fa fa-camera fa-fw"></i>AV機器、カメラ</a>
                <a class="list-group-item" href="index.php?id=2505&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>&price=<?php echo $price; ?>"><i class="fa fa-plug fa-fw"></i>家電</a>
                <a class="list-group-item" href="index.php?id=2506&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>&price=<?php echo $price; ?>"><i class="fa fa-home fa-fw"></i>家具、インテリア</a>
                <a class="list-group-item" href="index.php?id=2507&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>&price=<?php echo $price; ?>"><i class="fa fa-leaf fa-fw"></i>花、ガーデニング</a>
                <a class="list-group-item" href="index.php?id=2508&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>&price=<?php echo $price; ?>"><i class="fa fa-archive fa-fw"></i>キッチン、生活雑貨、日用品</a>
                <a class="list-group-item" href="index.php?id=2503&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>&price=<?php echo $price; ?>"><i class="fa fa-wrench fa-fw"></i>DIY、工具、文具</a>
                <a class="list-group-item" href="index.php?id=2509&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>&price=<?php echo $price; ?>"><i class="fa fa-paw fa-fw"></i>ペット用品、生き物</a>
                <a class="list-group-item" href="index.php?id=2510&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>&price=<?php echo $price; ?>"><i class="fa fa-bell-o fa-fw"></i>楽器、趣味、学習</a>
                <a class="list-group-item" href="index.php?id=2511&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>&price=<?php echo $price; ?>"><i class="fa fa-gamepad fa-fw"></i>ゲーム、おもちゃ</a>
                <a class="list-group-item" href="index.php?id=2497&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>&price=<?php echo $price; ?>"><i class="fa fa-child fa-fw"></i>ベビー、キッズ、マタニティ</a>
                <a class="list-group-item" href="index.php?id=2512&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>&price=<?php echo $price; ?>"><i class="fa fa-futbol-o fa-fw"></i>スポーツ</a>
                <a class="list-group-item" href="index.php?id=2514&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>&price=<?php echo $price; ?>"><i class="fa fa-bicycle fa-fw"></i>自転車、車、バイク</a>
                <a class="list-group-item" href="index.php?id=2516&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>&price=<?php echo $price; ?>"><i class="fa fa-music fa-fw"></i>CD、音楽ソフト、チケット</a>
                <a class="list-group-item" href="index.php?id=2517&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>&price=<?php echo $price; ?>"><i class="fa fa-film fa-fw"></i>DVD、映像ソフト</a>
                <a class="list-group-item" href="index.php?id=10002&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>&price=<?php echo $price; ?>"><i class="fa fa-book fa-fw"></i>本、雑誌、コミック</a>
        </div>
        <?php } else {
            echo '<h1 class="widget-title">'.$resC["ResultSet"][0]["Result"]["Categories"]["Current"]["Title"]["Short"].'</h1>';

            foreach($resC["ResultSet"][0]["Result"]["Categories"]["Children"] as $item){ 
                if(isset($item["Title"]["Short"])){
                    echo '<a class="list-group-item" href="index.php?id='.$item["Id"].'&sort='.$sort.'&results='.$results.'&price='.$price.'">'.$item["Title"]["Short"].'</a>';
                }
            }

            if(isset($_GET['id']) && $_GET['id'] > 1){
                echo '<a class="list-group-item" href="index.php?id='.$resC["ResultSet"][0]["Result"]["Categories"]["Current"]["ParentId"].'&sort='.$sort.'&results='.$results.'&price='.$price.'"><i class="fa fa-angle-up"></i>上のカテゴリに戻る</a>';
                echo '<a class="list-group-item" href="index.php?id=1&sort='.$sort.'&results='.$results.'&price='.$price.'"><i class="fa fa-angle-double-up"></i>トップに戻る</a>';
            }
        } ?>
    </div>

    <div class="center is-pc">
        <script type="text/javascript" src="http://i.yimg.jp/images/shp_front/js/adparts/YahooShoppingAdParts.js"></script>
        <script type="text/javascript">
        YahooShoppingAdParts({
         api:"itemSearch",
         query:{
          query:decodeURIComponent("<?php echo $keyword; ?>"),
          ad_type:"300_250_itemlist",
          yahoo_color_border:"aaaaaa",
          yahoo_color_link:"0000ff",
          yahoo_color_bg:"ffffff",
          yahoo_color_price:"d50000",
          category_id:"<?php echo $category; ?>",
          availability:"1",
          sort:"-score",
          discount:"",
          shipping:"",
          affiliate_type:"yid",
          affiliate_id:"FD.RWZqlDqeHYKdLMFcQUA--",
          appid:"PV4HEDKxg675dy7DXmu9TR8RSxSq75NeUXTcTid5cWXGa5epw19jO1q4exBWeqQsif97"
         },
         iframe:{
          width:300,
          height:250
         }
        })
        </script>
    </div>
    <div id="sidead" class="is-pc">
        <?php if (!$sp) { ?>
        <div class="center">
            <script type="text/javascript" src="http://i.yimg.jp/images/auct/blogparts/shp_review_bp.js?rss=0&rcl=0&cid=<?php echo $p_cid; ?>&aty=yid&affid=FD.RWZqlDqeHYKdLMFcQUA--&pt=5&appid=PV4HEDKxg675dy7DXmu9TR8RSxSq75NeUXTcTid5cWXGa5epw19jO1q4exBWeqQsif97"></script>
        </div>
        <?php } ?>
        <div class="center">
            <script type="text/javascript" src="http://adm.shinobi.jp/s/7391682fb9058aeb3b57caab93354a2f"></script>
        </div>
        <div class="center">
            <script type="text/javascript" src="http://adm.shinobi.jp/s/56176dcf60edc3216b9be217d64d8ca0"></script>
        </div>
    </div>
</div>

<div class="col-sm-8">

<!-- row -->
<div class="row">
<div class="col-sm-12">
    <div class="widget-container widget_search styled boxed line-left bread">
        <div class="inner">
<?php
if ($id == 1) {
    echo "<span>Yahoo!ショッピングから最新のレビューをお届け！</span>";
} else {
    foreach ($resC["ResultSet"][0]["Result"]["Categories"]["Current"]["Path"] as $item) {
        if (is_array($item)) {
            if ($item["Id"] == 1) {
                echo '<div class="item"><a href="index.php?id=1&sort='.$sort.'&results='.$results.'&price='.$price.'"><span>トップ</span></a></div>';
            } else {
                echo '<span> &gt; </span><div class="item" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="index.php?id='.$item["Id"].'&sort='.$sort.'&results='.$results.'&price='.$price.'" itemprop="url"><span itemprop="title">'.$item["Title"]["Name"].'</span></a></div>';
            }
        }
    }
}
?>
        </div>
    </div>
</div>
</div>
<!--/ row -->

<div class="row">
    <?php if ($res["ResultSet"]["totalResultsReturned"] > 0) { ?>
    <div class="col-sm-4">
        <div class="user-menu">
            <ul class="dropdown clearfix boxed ul-number">
                <li class="first last"><span class="a-number"><span><?php echo number_format($res["ResultSet"]["totalResultsAvailable"]); ?>件中<br><?php echo number_format($start); ?>～<?php echo number_format($start + $res["ResultSet"]["totalResultsReturned"] - 1); ?>件目</span></span></li>
            </ul>
        </div>
    </div>
    <?php } ?>

    <div class="col-sm-4">
        <div class="user-menu">
            <ul class="dropdown clearfix boxed">
                <li class="first parent"><a href="#" hidefocus="true" style="outline: none;"><i class="icon-menu icon-menu4"></i><span>表示順</span></a>
                    <ul>
                        <li class="first"><a href="index.php?id=<?php echo $id; ?>&sort=-updatetime&results=<?php echo $results; ?>&price=<?php echo $price; ?>" hidefocus="true" style="outline: none;">新着</a></li>
                        <li class=""><a href="index.php?id=<?php echo $id; ?>&sort=-review_rate&results=<?php echo $results; ?>&price=<?php echo $price; ?>" hidefocus="true" style="outline: none;">高評価優先</a></li>
                        <li class="last"><a href="index.php?id=<?php echo $id; ?>&sort=%2Breview_rate&results=<?php echo $results; ?>&price=<?php echo $price; ?>" hidefocus="true" style="outline: none;">低評価優先</a></li>
                    </ul>
                </li>
                <li><div class="ribbon">
                    <span>
                        <strong>
                            <?php
                                if ($sort == "-updatetime") {
                                    echo "<br>新着順";
                                } elseif ($sort == "-review_rate") {
                                    echo "高評価優先";
                                } elseif ($sort == "%2Breview_rate") {
                                    echo "低評価優先";
                                }
                            ?>
                        </strong>
                    </span>
                </div></li>
            </ul>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="user-menu">
            <ul class="dropdown clearfix boxed">
                <li class="first parent"><a href="#" hidefocus="true" style="outline: none;"><i class="icon-menu icon-menu6"></i><span>表示数</span></a>
                    <ul>
                        <li class="first"><a href="index.php?id=<?php echo $id; ?>&sort=<?php echo $sort; ?>&results=10&price=<?php echo $price; ?>" hidefocus="true" style="outline: none;">10件</a></li>
                        <li class=""><a href="index.php?id=<?php echo $id; ?>&sort=<?php echo $sort; ?>&results=30&price=<?php echo $price; ?>" hidefocus="true" style="outline: none;">30件</a></li>
                        <li class="last"><a href="index.php?id=<?php echo $id; ?>&sort=<?php echo $sort; ?>&results=50&price=<?php echo $price; ?>" hidefocus="true" style="outline: none;">50件</a></li>
                    </ul>
                </li>
                <li><div class="ribbon">
                    <span>
                        <strong>
                            <br>
                            <?php
                                if ($results == 10) {
                                    echo "10件";
                                } elseif ($results == 30) {
                                    echo "30件";
                                } elseif ($results == 50) {
                                    echo "50件";
                                }
                            ?>
                        </strong>
                    </span>
                </div></li>
            </ul>
        </div>
    </div>
</div>

<?php if ($notice != "") { ?>
    <div class="comment-list styled clearfix">
        <ol>
            <li class="comment">
                <div class="comment-body boxed">
                    <div class="comment-arrow"></div>
                    <div class="comment-avatar">
                    </div>
                    <div class="comment-text">
                        <div class="comment-author clearfix">
                            <a class="link-author"><?php echo $notice; ?></a>
                        </div>
                        <div class="comment-entry">
                            <br>
                            <a href="http://minrev.main.jp/"><p class="name">トップに戻る</p></a>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>
        </ol>
    </div>
<?php } else { ?>
<?php foreach($res["ResultSet"]["Result"] as $item){ ?>
    <div class="comment-list styled clearfix">
        <ol>
            <li class="comment">
                <div class="comment-body boxed">
                    <div class="comment-arrow"></div>
                    <div class="comment-avatar">
                        <div class="avatar"><a href="<?php echo $item["Target"]["Url"]; ?>#ItemInfo" target="_blank"><img src="<?php echo $item["Target"]["Image"]["Medium"]["Url"]; ?>"/></a></div>
                        <a href="<?php echo $item["Target"]["Url"]; ?>#ItemInfo" class="btn btn-green" target="_blank"><span>詳細</span></a>
                    </div>
                    <div class="comment-text">
                        <div class="rating"><!--
                            <?php for ($i=0; $i < $item["Ratings"]["Rate"]; $i++) { ?>
                                --><span class="star on"></span><!--
                            <?php } ?>
                            --><!--
                            <?php for ($i=0; $i < 5 - $item["Ratings"]["Rate"]; $i++) { ?>
                                --><span class="star off"></span><!--
                            <?php } ?>
                        --></div>
                        <p class="time"><?php
                            $time = substr($item["Update"], 0, 19);
                            $time = str_replace('-', '/', $time);
                            $time = str_replace('T', ' ',$time);
                            echo $time; 
                        ?></p>
                        <div class="clearfix"></div>
                        <div class="comment-author clearfix">
                            <a href="<?php echo $item["Url"]; ?>" class="link-author" target="_blank"><h3><?php echo $item["ReviewTitle"]; ?></h3></a>
                        </div>
                        <div class="comment-entry">
                            <p class="description"><?php echo $item["Description"]; ?></p>
                            <a href="<?php echo $item["Target"]["Url"]; ?>#ItemInfo" target="_blank"><h2 class="name"><?php echo $item["Target"]["Name"]; ?></h2></a>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>
        </ol>
    </div>
<?php } ?>
<?php } ?>

<div class="undernavi">
    <div class="new"><?php echo $newest."&nbsp;&nbsp;".$newer; ?></div>
    <div class="old"><?php echo $older."&nbsp;&nbsp;".$oldest; ?></div>
</div>
<div class="clearfix"></div>

<div class="footer-right">
    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://minrev.main.jp/" data-text="みんなの新着レビュー">Tweet</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

    <div class="fb-like" data-href="http://minrev.main.jp/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>

    <a href="http://b.hatena.ne.jp/entry/http://minrev.main.jp/" class="hatena-bookmark-button" data-hatena-bookmark-title="みんなの新着レビュー" data-hatena-bookmark-layout="standard-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a>
    <script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>

    <div class="g-plusone" data-size="medium" data-href="http://minrev.main.jp/"></div>
    
    <span class="is-pc">
    <!-- AddThis Button BEGIN -->
    <a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=ra-4e3ab77310f2fc55"><img src="http://s7.addthis.com/static/btn/v2/lg-share-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0"/></a>
    <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e3ab77310f2fc55"></script>
    <!-- AddThis Button END -->
    </span>

    <br>
    <a href="#top" class="anchor"><img src="./image/top.png" width="70px"/></a>

    <!-- Begin Yahoo! JAPAN Web Services Attribution Snippet -->
    <a href="http://developer.yahoo.co.jp/about">
    <img src="http://i.yimg.jp/images/yjdn/yjdn_attbtn1_125_17.gif" title="Webサービス by Yahoo! JAPAN" alt="Web Services by Yahoo! JAPAN" width="125" height="17" border="0" style="margin:15px 15px 0px 15px"></a>
    <!-- End Yahoo! JAPAN Web Services Attribution Snippet -->

    <br><br>
    <span>Copyright &copy; <?php echo date("Y"); ?> <a href="http://tiger4th.com/">tiger4th.com</a> All Rights Reserved.</span>
</div>
</div>
</div>
<!--/ row -->

</div>
<!--/ content -->

</div>
<!--/ container -->

<?php if (!$sp) { ?>
<!-- share -->
<div class="share is-pc">
    <p>
        <a href="#top" class="anchor"><img src="./image/top.png" width="70px"/></a>
    </p>
    <p>
        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://minrev.main.jp/" data-text="みんなの新着レビュー" data-count="vertical">Tweet</a>
    </p>
    <p>
        <div class="fb-like" data-href="http://minrev.main.jp/" data-layout="box_count" data-action="like" data-show-faces="false" data-share="true"></div>
    </p>
    <p>
        <a href="http://b.hatena.ne.jp/entry/http://minrev.main.jp/" class="hatena-bookmark-button" data-hatena-bookmark-title="みんなの新着レビュー" data-hatena-bookmark-layout="vertical-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a>
    </p>
    <p>
        <div class="ninja_onebutton">
            <script type="text/javascript">
            //<![CDATA[
            (function(d){
            if(typeof(window.NINJA_CO_JP_ONETAG_BUTTON_f5aaf6564c6827526c4857336d8ab33d)=='undefined'){
                document.write("<sc"+"ript type='text\/javascript' src='http:\/\/omt.shinobi.jp\/b\/f5aaf6564c6827526c4857336d8ab33d'><\/sc"+"ript>");
            }else{
                window.NINJA_CO_JP_ONETAG_BUTTON_f5aaf6564c6827526c4857336d8ab33d.ONETAGButton_Load();}
            })(document);
            //]]>
            </script><span class="ninja_onebutton_hidden" style="display:none;"></span><span style="display:none;" class="ninja_onebutton_hidden"></span>
        </div>
    </p>
</div>
<!--/ share -->
<?php } ?>
</div>
</body>
</html>
