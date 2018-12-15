<?php
require "src/YTDownloader.php"
$badvid = $_GET['v'];
$yt = new YTDownloader();

$links = $yt->getDownloadLinks('$badvid');

print_r($links);

