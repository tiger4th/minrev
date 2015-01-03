<?php

//カテゴリ取得
$id = '1';

if(isset($_GET['id'])){
    $id = $_GET['id'];
}
$urlC = "http://shopping.yahooapis.jp/ShoppingWebService/V1/json/categorySearch?appid=".$app_id."&category_id=".$id;

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

curl_setopt($ch, CURLOPT_URL, $urlC);
$responseC = curl_exec($ch);
$resC = json_decode($responseC, true);

if(!isset($resC["ResultSet"])){
    echo '<meta charset="utf-8">ただいまご利用いただけません。しばらくお待ちください。<br><a href="http://minrev.main.jp/">トップページに戻る</a>';
    exit;
}

// レビューパーツ
if (isset($resC["ResultSet"][0]["Result"]["Categories"]["Current"]["Path"][1]["Id"])) {
    $p_cid = $resC["ResultSet"][0]["Result"]["Categories"]["Current"]["Path"][1]["Id"];
} else {
    $p_cid = 1;
}

//アフィリエイトウィジェット
$keyword = "特価";
$category = "";
if(isset($resC["ResultSet"][0]["Result"]["Categories"]["Current"]["Id"])){
    $category = $resC["ResultSet"][0]["Result"]["Categories"]["Current"]["Id"];
}

$urlW = "http://shopping.yahooapis.jp/ShoppingWebService/V1/json/queryRanking?appid=".$app_id."&hits=2&category_id=".$resC["ResultSet"][0]["Result"]["Categories"]["Current"]["Id"];

curl_setopt($ch, CURLOPT_URL, $urlW);
$responseW = curl_exec($ch);
$resW = json_decode($responseW, true);

if(isset($resW["ResultSet"][0]["Result"][0]["Query"]) && substr($resW["ResultSet"][0]["Result"][0]["Query"], 0, 1) != "-"){
    if($resW["ResultSet"][0]["Result"][0]["Query"] != "あすつく" && !ctype_digit($resW["ResultSet"][0]["Result"][0]["Query"])){
        $keyword = rawurlencode($resW["ResultSet"][0]["Result"][0]["Query"]);
    }else{
        $keyword = rawurlencode($resW["ResultSet"][0]["Result"][1]["Query"]);
    }
}else{
    $keyword = $resC["ResultSet"][0]["Result"]["Categories"]["Current"]["Title"]["Medium"];
    $keyword = str_replace("全般", "", $keyword);
    $keyword = str_replace("その他", "", $keyword);
    $keyword = str_replace("関連用品", "", $keyword);
    $keyword = str_replace("用品作成", "", $keyword);
    $keyword = str_replace("用品", "", $keyword);
    $keyword = explode("、", $keyword);
    $keyword = explode("（", $keyword[0]);
    $keyword = explode("用", $keyword[0]);
    if(isset($keyword[1])){$keyword[0] = $keyword[1];}
    $keyword = $keyword[0];
}


//変数
$newest  = "";
$newer   = "";
$older   = "";
$oldest  = "";
$blinker = "";
$res = array();
$notice = array();

$sort    = '-updatetime';
$results = 30;
$start   = 1;
$price   = 0;

if(isset($_GET['sort']) && ($_GET['sort'] == '-updatetime' || $_GET['sort'] == '+updatetime' || $_GET['sort'] == '-review_rate' || $_GET['sort'] == '+review_rate')){
    $sort = rawurlencode($_GET['sort']);
}
if(isset($_GET['results']) && ctype_digit($_GET['results'])){
    $results = $_GET['results'];
}
if(isset($_GET['start']) && ctype_digit($_GET['start'])){
    $start = $_GET['start'];
}
if(isset($_GET['price']) && ctype_digit($_GET['price'])){
    $price = $_GET['price'];
}

//レビュー取得
$url = "http://shopping.yahooapis.jp/ShoppingWebService/V1/json/reviewSearch?appid=".$app_id."&affiliate_type=yid&affiliate_id=FD.RWZqlDqeHYKdLMFcQUA--&results=".$results."&category_id=".$id."&sort=".$sort."&start=".$start;

curl_setopt($ch, CURLOPT_URL, $url);
$response = curl_exec($ch);
$res = json_decode($response, true);

if(!isset($res["ResultSet"])){
    $res["ResultSet"][0] = "";
    $res["ResultSet"]["totalResultsAvailable"] = 0;
    $res["ResultSet"]["totalResultsReturned"] = 0;
    $category = $resC["ResultSet"][0]["Result"]["Categories"]["Current"]["ParentId"];

    $notice["title"] = "現在一時的にご利用いただけません";
    $notice["description"] = "申し訳ございませんが、時間をおいて再度アクセスをお願い致します。";
}elseif($res["ResultSet"]["totalResultsReturned"] <= 0){
    if($start == 1){
        $notice["title"] = "このカテゴリにはレビューがありません";
    }else{
        $notice["title"] = "レビュー表示位置が不正です";
    }
    $notice["description"] = '<a href="index.php?id='.$resC["ResultSet"][0]["Result"]["Categories"]["Current"]["ParentId"].'&sort='.$sort.'&results='.$results.'&price='.$price.'">上のカテゴリに戻る</a><br><br><a href="index.php?id=1&sort='.$sort.'&results='.$results.'&price='.$price.'">トップに戻る</a>';
}

/*
// Medium画像がないとき
foreach($res["ResultSet"]["Result"] as $key => $item){
    if (!@file_get_contents($item["Target"]["Image"]["Medium"]["Url"], NULL, NULL, 0, 1)) {
        $res["ResultSet"]["Result"][$key]["Target"]["Image"]["Medium"]["Url"]
            = $item["Target"]["Image"]["Small"]["Url"];
    }
}
*/

/*
//値段取得
if($price==1){
    $i=0;
    foreach($res["ResultSet"]["Result"] as $item){
    $p = $item["Target"]["Code"];
    $urlP = "http://shopping.yahooapis.jp/ShoppingWebService/V1/json/itemLookup?appid=".$app_id."&itemcode=".$p;
    
    curl_setopt($ch, CURLOPT_URL, $urlP);
    $responseP = curl_exec($ch);
    $resP = json_decode($responseP, true);
    
    if($resP["ResultSet"]["totalResultsReturned"] > 0){
        $res["ResultSet"]["Result"][$i]["Target"]["Price"] = "&nbsp;&yen;".number_format($resP["ResultSet"][0]["Result"][0]["Price"]["_value"]);
    }else{
        $res["ResultSet"]["Result"][$i]["Target"]["Price"] = "&nbsp;販売終了";
    }
    
    $i++;
    }
}
*/

curl_close($ch);

//ページ移動
if($res["ResultSet"]["totalResultsAvailable"] > $results){
    if($start > 1){
        $newest = '<a href="index.php?id='.$id.'&sort='.$sort.'&results='.$results.'&price='.$price.'" class="btn btn-left btn-red"><span>&#171; 最新</span></a>&nbsp;';
        $newer = '<a href="index.php?id='.$id.'&sort='.$sort.'&results='.$results.'&price='.$price.'&start='.($start - $results).'" class="btn btn-left"><span>&#139; 前へ</span></a>';
    }
    if($res["ResultSet"]["totalResultsAvailable"] > ($start + $results - 1)){
        $older = '<a href="index.php?id='.$id.'&sort='.$sort.'&results='.$results.'&price='.$price.'&start='.($start + $results).'" class="btn btn-right"><span>次へ &#155;</span></a>&nbsp;';
        if ($id != 1) {
            $oldest = '<a href="index.php?id='.$id.'&sort='.$sort.'&results='.$results.'&price='.$price.'&start='.($res["ResultSet"]["totalResultsAvailable"] - $results + 1).'" class="btn btn-right"><span>最古 &#187;</span></a>';
        }
    }
}

//デバイス
$ua = $_SERVER['HTTP_USER_AGENT'];
$sp = false;
if ((strpos($ua, 'iPhone') !== false) || (strpos($ua, 'iPad') !== false) || (strpos($ua, 'iPod') !== false) || (strpos($ua, 'Android') !== false) || (strpos($ua, 'Windows Phone') !== false)) {
    $sp = true;
}
