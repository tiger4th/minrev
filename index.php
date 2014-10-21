<?php require("./app_id.php"); ?>
<?php require("./curl.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="レビュー,新着,ヤフー,Yahoo!,ショッピング,オークション,商品<?php
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
<meta http-equiv="content-Style-type" content="text/css" />
<meta http-equiv="content-Script-type" content="text/javascript" />
<title><?php
switch($help){
	case 0:
		if($id==1){
			echo "みんなの新着レビュー - 最新の口コミ情報をお届け！";
		}else{
			echo $resC["ResultSet"][0]["Result"]["Categories"]["Current"]["Title"]["Medium"]."の新着レビュー - みんなの新着レビュー";
		}
		break;
	case 1:
		echo "ヘルプ - みんなの新着レビュー";
		break;
	case 2:
		echo "更新履歴 - みんなの新着レビュー";
		break;
}
?></title>
<link rel="stylesheet" type="text/css" href="./style.css" />
<link rel="shortcut icon" href="./image/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="icon" href="./image/favicon.ico" type="image/vnd.microsoft.icon" />

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20423739-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div align="right"><span class="sm">
<a name="top" id="top">&nbsp;</a>
<?php echo '<a href="./index.php?id=1&sort='.$sort.'&results='.$results.'&price='.$price.'">トップ</a>'; ?>
 - 
<?php echo '<a href="./index.php?id='.$id.'&sort='.$sort.'&results='.$results.'&price='.$price.'&start='.$start.'&help=1">ヘルプ</a>'; ?>
 - 
<?php echo '<a href="./index.php?id='.$id.'&sort='.$sort.'&results='.$results.'&price='.$price.'&start='.$start.'&help=2">更新履歴</a>'; ?>
 - 
<?php echo '<a href="http://tiger4th.com/">リンク</a>'; ?>
&nbsp;&nbsp;
</span></div>

<div id="wrapper">
<div id="header">
<div id="boxlogo" align="center">
<?php echo '<a href="./index.php?id=1&sort='.$sort.'&results='.$results.'&price='.$price.'"><img src="./image/logo.png" height="75" width="300" border="0" alt="みんなの新着レビュー" /></a>'; ?>
</div>

<div id="ad">
<script type="text/javascript" src="http://i.yimg.jp/images/auct/blogparts/shp_review_bp.js?rss=2&rcl=0&cid=<?php echo $p_cid; ?>&aty=yid&affid=FD.RWZqlDqeHYKdLMFcQUA--&pt=5&appid=PV4HEDKxg675dy7DXmu9TR8RSxSq75NeUXTcTid5cWXGa5epw19jO1q4exBWeqQsif97"></script>
</div>

</div>

<div id="pan">
<?php
if($id==1){
	echo "<h1><span class='sm'>Yahoo!ショッピングから最新のレビューをお届け！</span></h1>";
}else{
	foreach($resC["ResultSet"][0]["Result"]["Categories"]["Current"]["Path"] as $item){
		if (is_array($item)) {
			if($item["Id"]==1){
				echo '<a href="./index.php?id=1&sort='.$sort.'&results='.$results.'&price='.$price.'"><span class="sm">トップ</span></a>';
			}elseif($item["Id"]==$resC["ResultSet"][0]["Result"]["Categories"]["Current"]["Id"]){
				echo '<span class="sm"> &#155; </span><h1><span class="sm">'.$resC["ResultSet"][0]["Result"]["Categories"]["Current"]["Title"]["Short"].'</span></h1>';
			}else{
				echo '<span class="sm"> &#155; </span><a href="./index.php?id='.$item["Id"].'&sort='.$sort.'&results='.$results.'&price='.$price.'"><span class="sm">'.$item["Title"]["Name"].'</span></a>';
			}
		}
	}
}
?>
</div>


<div id="container">
<div id="contents">
<div class="boxhead" align="left">
<div id="subject">
<h2><span class="mdw">
<?php
switch ($help) {
	case 0:
		echo '新着レビュー';
		break;
	case 1:
		echo 'ヘルプ';
		break;
	case 2:
		echo '更新履歴';
		break;
}
?>
</span></h2>
</div>
<div id="page">
&nbsp;<span class="smw"><?php
if(isset($res["ResultSet"]["totalResultsReturned"]) && $res["ResultSet"]["totalResultsReturned"] > 0 && !isset($tweet)){
 echo number_format($res["ResultSet"]["totalResultsAvailable"])."件中 ".number_format($start)."～".number_format($start + $res["ResultSet"]["totalResultsReturned"] - 1)."件目";
} ?></span>
<?php if($help==0){echo '<a href="http://ic.edge.jp/page2feed/http://minrev.main.jp/index.php?id='.$id.'&price=1&nb=1" target="_blank"><img src="./image/rss.png" border="0" alt=" RSS" style="vertical-align: middle;" /></a>';} ?>
</div>
</div>

<div class="box" align="left">
<?php require("./review.php"); ?>
</div>

<p id="undernavi"><span class="sm">
<?php echo $blinker; ?>
</span></p>


</div>
</div>

<div id="sidebar" align="center">
<div class="boxhead" align="left">
<h2><span class="mdw">商品カテゴリ</span></h2>
</div>
<div class="box" align="left">
<?php require("./category.php"); ?>
</div>
<br />

<div class="boxhead" align="left">
<h2><span class="mdw">リンク</span></h2>
</div>
<div class="box" align="center">
<a href="http://minrev.main.jp/c/"><img src="./image/bannerC.png" border="0" alt="みんなの新着レビューC" /></a>
</div>
<div class="box" align="center">
<a href="http://tiger4th.com/yamazon/"><img src="./image/yamazon.png" border="0" alt="yamazon" /></a>
</div>
<div class="box" align="center">
<a href="http://tiger4th.com/anibuzz/"><img src="./image/anibuzz.png" border="0" alt="anibuzz" /></a>
</div>
<br />

<script type="text/javascript" src="http://i.yimg.jp/images/auct/blogparts/auc_bp.js?s=1&cl=4&qu=<?php echo $keyword; ?>&cid=0&di=0&od=1&ti=&pt=0&dotyid=aucb%2Fp%2FFD.RWZqlDqeHYKdLMFcQUA--&sid=2219441&pid=878398084"></script>
<br /><br />

<div class="box2">
<script type="text/javascript" src="http://i.yimg.jp/images/shp_front/js/adparts/YahooShoppingAdParts.js"></script>
<script type="text/javascript">
YahooShoppingAdParts({
 api:"itemSearch",
 query:{
  query:decodeURIComponent("<?php echo $keyword; ?>"),
  ad_type:"160_600_itemlist",
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
  width:160,
  height:600
 }
})
</script>
</div>
<br />

<?php if($results >= 20){ ?>
<div class="box2">
<!-- admax -->
<script type="text/javascript" src="http://adm.shinobi.jp/s/7391682fb9058aeb3b57caab93354a2f"></script>
<!-- admax -->
</div>
<br />

<div class="box2">
<!-- admax -->
<script type="text/javascript" src="http://adm.shinobi.jp/s/56176dcf60edc3216b9be217d64d8ca0"></script>
<!-- admax -->
</div>
<br />
<?php } ?>

<!-- AddThis Button BEGIN -->
<a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=ra-4e3ab77310f2fc55"><img src="http://s7.addthis.com/static/btn/v2/lg-share-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0"/></a>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e3ab77310f2fc55"></script>
<!-- AddThis Button END -->
<?php require("./js/addthis.js"); ?>

<!-- Begin Yahoo! JAPAN Web Services Attribution Snippet -->
<a href="http://developer.yahoo.co.jp/about">
<img src="http://i.yimg.jp/images/yjdn/yjdn_attbtn1_125_17.gif" title="Webサービス by Yahoo! JAPAN" alt="Web Services by Yahoo! JAPAN" width="125" height="17" border="0" style="margin:15px 15px 15px 15px"></a>
<!-- End Yahoo! JAPAN Web Services Attribution Snippet -->

</div>

<div id="footer">
<p>
<span class="sm">
<?php echo '<a href="./index.php?id=1&sort='.$sort.'&results='.$results.'&price='.$price.'">トップ</a>'; ?>
 - 
<?php echo '<a href="./index.php?id='.$id.'&sort='.$sort.'&results='.$results.'&price='.$price.'&start='.$start.'&help=1">ヘルプ</a>'; ?>
 - 
<?php echo '<a href="./index.php?id='.$id.'&sort='.$sort.'&results='.$results.'&price='.$price.'&start='.$start.'&help=2">更新履歴</a>'; ?>
</span>

<br />
<span class="xs">Copyright &copy; <?php echo date("Y"); ?> <a href="http://minrev.main.jp/">みんなの新着レビュー</a> All Rights Reserved.</span>
</p>
</div>

</div>

<script src="http://f1.nakanohito.jp/lit/index.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">try { var lb = new Vesicomyid.Bivalves("114566"); lb.init(); } catch(err) {} </script>
</body>
</html>