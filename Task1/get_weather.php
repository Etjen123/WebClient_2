<?php

error_reporting (E_ALL ^ E_NOTICE);

if(isSet($_GET['p']))
{
$p = $_GET['p'];

require('magpierss/rss_fetch.inc');

$url = 'http://weather.yahooapis.com/forecastrss?p='.$p.'&u=c';

$rss = fetch_rss($url);

$title = $rss->items[0]['title'];

$description = $rss->items[0]['description'];

echo "<br />".$title."<br /><br />".$description."<br />";
}
?>