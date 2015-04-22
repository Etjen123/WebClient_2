<?php
//get the q parameter from URL
$q=$_GET["q"];

//find out which feed was selected
if($q=="c1") {
  $xml=("http://news.google.co.uk/news?ned=uk&topic=h&output=rss");
  $xml1=("http://news.google.co.uk/news?ned=uk&topic=s&output=rss");
} 

$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);

/*//get elements from "<channel>"
$channel=$xmlDoc->getElementsByTagName('channel')->item(0);
$channel_title = $channel->getElementsByTagName('title')
->item(0)->childNodes->item(0)->nodeValue;
$channel_link = $channel->getElementsByTagName('link')
->item(0)->childNodes->item(0)->nodeValue;
$channel_desc = $channel->getElementsByTagName('description')
->item(0)->childNodes->item(0)->nodeValue;


//output elements from "<channel>"
echo("<p><a href='" . $channel_link
  . "'>" . $channel_title . "</a>");
echo("<br>");
echo($channel_desc . "</p>");*/

//get and output "<item>" elements
echo ("<h1>Local News</h1>");
$x=$xmlDoc->getElementsByTagName('item');
for ($i=0; $i<=1; $i++) {
  $item_title=$x->item($i)->getElementsByTagName('title')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_link=$x->item($i)->getElementsByTagName('link')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_desc=$x->item($i)->getElementsByTagName('description')
  ->item(0)->childNodes->item(0)->nodeValue;
  echo ("<p><a href='" . $item_link
  . "'>" . $item_title . "</a>");
  echo ("<br>");
  echo ($item_desc . "</p>");
}  


$xmlDoc1 = new DOMDocument();
$xmlDoc1->load($xml1);


/*//get elements from "<channel>"
$channel1=$xmlDoc1->getElementsByTagName('channel')->item(0);
$channel_title1 = $channel1->getElementsByTagName('title')
->item(0)->childNodes->item(0)->nodeValue;
$channel_link1 = $channel1->getElementsByTagName('link')
->item(0)->childNodes->item(0)->nodeValue;
$channel_desc1 = $channel1->getElementsByTagName('description')
->item(0)->childNodes->item(0)->nodeValue;

//output elements from "<channel>"
echo("<p><a href='" . $channel_link1
  . "'>" . $channel_title1 . "</a>");
echo("<br>");
echo($channel_desc1 . "</p>");*/

  //get and output "<item>" elements
  echo ("<h1>Sports News</h1>");
$x1=$xmlDoc1->getElementsByTagName('item');
for ($i=0; $i<=1; $i++) {
  $item_title1=$x1->item($i)->getElementsByTagName('title')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_link1=$x1->item($i)->getElementsByTagName('link')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_desc1=$x1->item($i)->getElementsByTagName('description')
  ->item(0)->childNodes->item(0)->nodeValue;
  echo ("<p><a href='" . $item_link1
  . "'>" . $item_title1 . "</a>");
  echo ("<br>");
  echo ($item_desc1 . "</p>");

}

?>