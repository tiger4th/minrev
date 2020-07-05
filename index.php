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

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link href="css/zocial.css" media="screen" rel="stylesheet">
<link href="style.css" media="screen" rel="stylesheet">
<link href="my.css" media="screen" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!--[if lt IE 9]><script src="js/respond.min.js"></script><![endif]-->
<!--[if gte IE 9]>
<style type="text/css">
    .gradient {filter: none !important;}
</style>
<![endif]-->

<link rel="shortcut icon" href="./image/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="icon" href="./image/favicon.ico" type="image/vnd.microsoft.icon" />
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

<div class="link is-pc">
    <a href="https://tiger4th.com/">tiger4th.com</a>
</div>

<div class="container container-wide">

<!-- content -->
<div class="content " role="main">
<!-- row -->
<div class="row">
<div class="col-sm-4">
    <!-- Website Menu -->
    <div class="logo">
        <a href="/">
            <img src="./image/logo.png" alt="みんなの新着レビュー"/>
        </a>
    </div>
    <!--/ Website Menu -->
    <br><br>
</div>

<?php if (!$sp) { ?>
<div class="col-sm-8 is-pc">
    <div class="head-ad">
        <!-- admax -->
        <script src="https://adm.shinobi.jp/s/53ef44afc127bc67dcee549a289d6c74"></script>
        <!-- admax -->
    </div>
    <br><br>
</div>
<?php } ?>
</div>
<!--/ row -->

<!-- row -->
<div class="row">
<div class="col-sm-4">
    <div class="widget-container boxed category">
        <?php if ($id == 1) { ?>
        <h1 class="widget-title" onClick="toggleList()">商品カテゴリ<i class="fa fa-bars fa-lg toggle-list"></i></h1>
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
            echo '<h1 class="widget-title" onClick="toggleList()">'.$resC["ResultSet"][0]["Result"]["Categories"]["Current"]["Title"]["Short"].'<i class="fa fa-bars fa-lg toggle-list"></i></h1>';
            echo '<div class="inner list-group">';
            foreach($resC["ResultSet"][0]["Result"]["Categories"]["Children"] as $item){ 
                if(isset($item["Title"]["Short"])){
                    echo '<a class="list-group-item" href="index.php?id='.$item["Id"].'&sort='.$sort.'&results='.$results.'&price='.$price.'">'.$item["Title"]["Short"].'</a>';
                }
            }
            if(isset($_GET['id']) && $_GET['id'] > 1){
                echo '<a class="list-group-item" href="index.php?id='.$resC["ResultSet"][0]["Result"]["Categories"]["Current"]["ParentId"].'&sort='.$sort.'&results='.$results.'&price='.$price.'"><i class="fa fa-angle-up"></i>上のカテゴリに戻る</a>';
                echo '<a class="list-group-item" href="index.php?id=1&sort='.$sort.'&results='.$results.'&price='.$price.'"><i class="fa fa-angle-double-up"></i>トップに戻る</a>';
            }
            echo '</div>';
        } ?>
    </div>
    <?php if (!$sp) { ?>
    <div id="sidead" class="is-pc">
        <div class="center">
            <script language="javascript" src="//ad.jp.ap.valuecommerce.com/servlet/jsbanner?sid=3185576&pid=886586878"></script>
            <noscript><a href="//ck.jp.ap.valuecommerce.com/servlet/referral?sid=3185576&pid=886586878" rel="nofollow"><img src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3185576&pid=886586878" border="0"></a></noscript>
        </div>
        <div class="center">
            <script type="text/javascript" src="https://adm.shinobi.jp/s/7391682fb9058aeb3b57caab93354a2f"></script>
        </div>
    </div>
    <?php } ?>
</div>

<div class="col-sm-8">

<!-- row -->
<div class="row">
<div class="col-sm-12">
    <div class="widget-container widget-search styled boxed line-left bread">
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

<?php if (!empty($notice)) { ?>
    <div class="comment-list styled clearfix">
        <ol>
            <li class="comment">
                <div class="comment-body boxed">
                    <div class="comment-arrow"></div>
                    <div class="comment-avatar">
                    </div>
                    <div class="comment-text">
                        <div class="comment-author clearfix">
                            <a class="link-author"><?php echo $notice["title"]; ?></a>
                        </div>
                        <div class="comment-entry">
                            <br>
                            <?php echo $notice["description"]; ?>
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
                        <div class="avatar"><a href="<?php echo $item["Target"]["Url"]; ?>#ItemInfo" target="_blank"><img src="<?php echo $item["Target"]["Image"]["Medium"]["Url"]; ?>" loading="lazy" /></a></div>
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
                        <hr class="comment-hr">
                        <div class="similar-search">
                            <a href="https://ck.jp.ap.valuecommerce.com/servlet/referral?sid=3185576&pid=883213932&vc_url=<?php echo rawurlencode('https://search.shopping.yahoo.co.jp/search?ei=UTF-8&p='.$item["Target"]["Name"]); ?>" class="zocial yahoo" target="_blank">ヤフーで探す</a>
                            <a href="https://hb.afl.rakuten.co.jp/hgc/13efd072.29187a8c.13efd073.0c4e5a0e/?pc=<?php echo rawurlencode('https://search.rakuten.co.jp/search/mall/'.$item["Target"]["Name"]); ?>" class="zocial rakuten" target="_blank">楽天で探す</a>
                            <a href="https://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=aps&keywords=<?php echo $item["Target"]["Name"]; ?>&linkCode=ur2&tag=tiger4th-22" class="zocial amazon" target="_blank">Amazonで探す</a>
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
    <a href="#top" class="anchor"><img src="./image/top.png" width="70px" loading="lazy" /></a>

    <!-- Begin Yahoo! JAPAN Web Services Attribution Snippet -->
    <a href="https://developer.yahoo.co.jp/about">
        <img src="https://i.yimg.jp/images/yjdn/yjdn_attbtn1_125_17.gif" title="Webサービス by Yahoo! JAPAN" alt="Web Services by Yahoo! JAPAN" width="125" height="17" border="0" style="margin:15px 15px 0px 15px" loading="lazy">
    </a>
    <!-- End Yahoo! JAPAN Web Services Attribution Snippet -->
    
    <a href="https://www.amazon.co.jp/?tag=tiger4th-22" class="zocial amazon associate" target="_blank">Amazon.co.jpアソシエイト</a>
    
    <img Src="https://ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3185576&pid=883213932" height="1" width="1" Border="0">

    <br><br>
    <span>&copy; 2010-<?php echo date("Y"); ?> <a href="https://tiger4th.com/">tiger4th.com</a></span>
</div>
</div>
</div>
<!--/ row -->

</div>
<!--/ content -->

</div>
<!--/ container -->

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/general.js"></script>
</body>
</html>
