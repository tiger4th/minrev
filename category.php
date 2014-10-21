<?php
if($id > 1){
	echo "<h3><span class='sm'>".$resC["ResultSet"][0]["Result"]["Categories"]["Current"]["Title"]["Short"]."</span></h3><span class='xs'> (".$res["ResultSet"]["totalResultsAvailable"].")</span><br /><hr color='#aaaaaa'>";
}

foreach($resC["ResultSet"][0]["Result"]["Categories"]["Children"] as $item){ 
	if(isset($item["Title"]["Short"])){
		if($id==1){echo '<img src="./image/'.$item["Id"].'.gif" height="10" width="10" alt="'.$item["Title"]["Short"].'" /> ';}
		echo '<a href="./index.php?id='.$item["Id"].'&sort='.$sort.'&results='.$results.'&price='.$price.'"><span class="sm">'.$item["Title"]["Short"].'</span></a><br />';
	}
}

if(isset($_GET['id']) && $_GET['id'] > 1){
	echo '<br /><a href="./index.php?id='.$resC["ResultSet"][0]["Result"]["Categories"]["Current"]["ParentId"].'&sort='.$sort.'&results='.$results.'&price='.$price.'"><span class="sm">上のカテゴリに戻る</span></a><br />';
}
?>



