<?php
//error_reporting(0);

$query = array(
  'f'=>$_GET['f'],
  't'=>$_GET['t'],
  'c'=>$_GET['c']
);

$url = "http://kosoku.jp/api/route.php?" .http_build_query($query);

echo file_get_contents($url);


?>
