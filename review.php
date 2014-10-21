<?php //if($res["ResultSet"]["totalResultsReturned"] > 0){ ?>
<?php if(!isset($tweet)){ ?>

<table summary="設定"><tr>
<td><span class="sm">表示順：<?php
if ($sort == "-updatetime") {echo "新着";}
else {echo '<a href="index.php?id='.$id.'&sort=-updatetime&results='.$results.'&price='.$price.'">新着</a>';}
if ($sort == "-review_rate") {echo "&nbsp;&nbsp;高評価新着";}
else {echo '&nbsp;&nbsp;<a href="index.php?id='.$id.'&sort=-review_rate&results='.$results.'&price='.$price.'">高評価新着</a>';}
if ($sort == "%2Breview_rate") {echo "&nbsp;&nbsp;低評価新着";}
else {echo '&nbsp;&nbsp;<a href="index.php?id='.$id.'&sort=%2Breview_rate&results='.$results.'&price='.$price.'">低評価新着</a>';}
?></span></td>

<td>&nbsp;&nbsp;&nbsp;</td>
<td><span class="sm">表示数：<?php
if ($results == 10) {echo "10件";}
else {echo '<a href="index.php?id='.$id.'&sort='.$sort.'&results=10&price='.$price.'&start='.$start.'">10件</a>';}
if ($results == 30) {echo "&nbsp;&nbsp;30件";}
else {echo '&nbsp;&nbsp;<a href="index.php?id='.$id.'&sort='.$sort.'&results=30&price='.$price.'&start='.$start.'">30件</a>';}
if ($results == 50) {echo "&nbsp;&nbsp;50件";}
else {echo '&nbsp;&nbsp;<a href="index.php?id='.$id.'&sort='.$sort.'&results=50&price='.$price.'&start='.$start.'">50件</a>';}
?></span></td>

<td>&nbsp;&nbsp;&nbsp;</td>
<td><span class="sm">価格：<?php
if ($price == 1) {echo "表示";}
else {echo '<a href="index.php?id='.$id.'&sort='.$sort.'&results='.$results.'&price=1&start='.$start.'">表示</a>';}
if ($price == 0) {echo "&nbsp;&nbsp;非表示";}
else {echo '&nbsp;&nbsp;<a href="index.php?id='.$id.'&sort='.$sort.'&results='.$results.'&price=0&start='.$start.'">非表示</a>';}
?></span></td>
</tr></table><br />

<?php foreach($res["ResultSet"]["Result"] as $item){ ?>
<?php if ($nb == 1) { ?>
<table summary="レビューテーブル">
<tr>
 <td><a href=<?php echo $item["Target"]["Url"]; ?> target="_blank"><img src="<?php echo $item["Target"]["Image"]["Small"]["Url"]; ?>" border="0" alt="<?php echo $item["Target"]["Name"]; ?>" /></a></td>
 <td>
  <table border="0" cellpadding="0" cellspacing="0" summary="レビュー">
   <tr><td></td><td></td><td><img src="./image/<?php echo $item["Ratings"]["Rate"]; ?>.gif" height="8" alt="<?php echo $item["Ratings"]["Rate"]; ?>点" /></td><td></td></tr>
   <tr>
    <td>　</td>
    <td></td><td><a href="<?php echo $item["Url"]; ?>" target="_blank"><?php echo $item["ReviewTitle"]; ?></a><br /><?php echo $item["Description"]; ?><br /><span class="xs"><a href=<?php echo $item["Target"]["Url"]; ?> target="_blank"><?php echo $item["Target"]["Name"]; ?></a><?php if($price==1){echo $item["Target"]["Price"];} ?></span></td><td></td>
   </tr>
   <tr><td></td><td></td><td align="right"><span class="xs"><?php
    $time = substr($item["Update"], 0, 19);
    $time = str_replace('-', '/', $time);
    $time = str_replace('T', ' ',$time);
    echo $time; 
   ?></span></td><td></td></tr>
  </table>
 </td>
</tr>
</table>
<br />
<?php }else{ ?>
<table summary="レビューテーブル">
<tr>
 <td><a href=<?php echo $item["Target"]["Url"]; ?> target="_blank"><img src="<?php echo $item["Target"]["Image"]["Small"]["Url"]; ?>" border="0" alt="<?php echo $item["Target"]["Name"]; ?>" /></a></td>
 <td>
  <table border="0" cellpadding="0" cellspacing="0" summary="レビュー">
   <tr><td></td><td><img src="./image/a.png" alt="" /></td><td bgcolor="#daedf5"><img src="./image/<?php echo $item["Ratings"]["Rate"]; ?>.gif" height="8" alt="<?php echo $item["Ratings"]["Rate"]; ?>点" /></td><td><img src="./image/b.png" alt="" /></td></tr>
   <tr>
    <td><img src="./image/e.png" alt="" /></td>
    <td bgcolor="#daedf5"></td><td bgcolor="#daedf5"><a href="<?php echo $item["Url"]; ?>" target="_blank"><?php echo $item["ReviewTitle"]; ?></a><br /><?php echo $item["Description"]; ?><br /><span class="xs"><a href=<?php echo $item["Target"]["Url"]; ?> target="_blank"><?php echo $item["Target"]["Name"]; ?></a><?php if($price==1){echo $item["Target"]["Price"];} ?></span></td><td bgcolor="#daedf5"></td>
   </tr>
   <tr><td></td><td><img src="./image/d.png" alt="" /></td><td bgcolor="#daedf5" align="right"><span class="xs"><?php
    $time = substr($item["Update"], 0, 19);
    $time = str_replace('-', '/', $time);
    $time = str_replace('T', ' ',$time);
    echo $time; 
   ?></span></td><td><img src="./image/c.png" alt="" /></td></tr>
  </table>
 </td>
</tr>
</table>
<br />
<?php } ?>
<?php } ?>

<?php } else {?>

<table border="0" cellpadding="0" cellspacing="5" summary="テキストテーブル">
<?php foreach($tweet as $item){ ?>
<tr>
 <td><img src="<?php echo $item["image"]; ?>" border="0" alt="<?php
  $file = explode('/', $item["image"]);
  $alt  = explode('.', $file[2]);
  echo $alt[0]; 
 ?>" /></td>
 <td>
  <table border="0" cellpadding="0" cellspacing="0" summary="テキスト">
   <tr><td></td><td><img src="./image/a.png" alt="" /></td><td bgcolor="#daedf5"></td><td><img src="./image/b.png" alt="" /></td></tr>
   <tr>
    <td><img src="./image/e.png" alt="" /></td>
    <td bgcolor="#daedf5"></td><td bgcolor="#daedf5"><?php echo $item["text"]; ?></td><td bgcolor="#daedf5"></td>
   </tr>
   <tr><td></td><td><img src="./image/d.png" alt="" /></td><td bgcolor="#daedf5" align="right"><?php if(isset($item["time"])){echo "<span class='xs'>".$item["time"]."</span>";} ?></td><td><img src="./image/c.png" alt="" /></td></tr>
  </table>
 </td>
</tr>
<?php } ?>

</table>
<?php }?>



