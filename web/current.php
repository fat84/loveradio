<?php

$string = file_get_contents('https://www.last.fm/user/ceniq/');
#$string = file_get_contents('http://www.last.fm/user/ceniq/');

$string = preg_replace("/<img[^>]+\>/i", "", $string);

echo $string;

?>