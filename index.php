<?php 
$text_0="";
$text_o = file ('data.Ro0t-96');
while (list ($line_num, $line) = each ($text_o)) {
$text_0=$text_0."$line"; }

//echo $text_0;
//echo "<br>";


$start="(";
$end=")";
$exit=";";


include('hashtag.php');
hashtag($text_0,$start,$end,$exit);
?>