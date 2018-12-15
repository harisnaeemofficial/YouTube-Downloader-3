<?php
require "src/YTDownloader.php"

$yt = new YTDownloader();

$links = $yt->getDownloadLinks("ffxKSjUwKdU");

print_r($links);

?>
