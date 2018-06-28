<?php
$xmlDoc="color:mediumblue">new DOMDocument();
$xmlDoc->load("color:brown">"produtos.xml");
"color:red"> 
$x=$xmlDoc->getElementsByTagName("color:brown">'link');
"color:red"> 
"color:red"> "color:green">//get the q parameter from URL
$q="color:goldenrod">$_GET["color:brown">"q"];
"color:red"> 
"color:red"> "color:green">//lookup all produtos from the xml file if length of q>0
"color:mediumblue">if (strlen($q)>"color:red">0)"color:red"> {
"color:red">   $hint="color:brown">"";
"color:red">   "color:mediumblue">for($i="color:red">0; $i<($x->length); $i++) {
"color:red">  "color:red">   $y=$x->item($i)->getElementsByTagName("color:brown">'title');
"color:red">     $z=$x->item($i)->getElementsByTagName("color:brown">'url');
"color:red">  "color:red">   "color:mediumblue">if ($y->item("color:red">0)->nodeType=="color:red">1) {
"color:red">  "color:red">     "color:green">//find a link matching the search text
"color:red">       "color:mediumblue">if (stristr($y->item("color:red">0)->childNodes->item("color:red">0)->nodeValue,$q)) {
"color:red">  "color:red">       "color:mediumblue">if ($hint=="color:brown">"") {
"color:red">  "color:red">         $hint="color:brown">"<a href='" . 
"color:red">           $z->item("color:red">0)->childNodes->item("color:red">0)->nodeValue . 
"color:red">           "color:brown">"' target='_blank'>" . 
"color:red">           $y->item("color:red">0)->childNodes->item("color:red">0)->nodeValue . "color:brown">"</a>";
"color:red">         } "color:mediumblue">else {
"color:red">  "color:red">         $hint=$hint . "color:brown">"<br /><a href='" . 
"color:red">           $z->item("color:red">0)->childNodes->item("color:red">0)->nodeValue . 
"color:red">           "color:brown">"' target='_blank'>" . 
"color:red">           $y->item("color:red">0)->childNodes->item("color:red">0)->nodeValue . "color:brown">"</a>";
"color:red">         }
"color:red">       }
"color:red">     }
"color:red">   }
"color:red"> }
"color:red"> 
"color:red"> "color:green">// Set output to "no suggestion" if no hint was found
"color:red"> "color:green">// or to the correct values
"color:mediumblue">if ($hint=="color:brown">"") {
"color:red">   $response="color:brown">"no suggestion";
"color:red"> } "color:mediumblue">else {
"color:red">   $response=$hint;
"color:red"> }
"color:red"> 
"color:red"> "color:green">//output the response
"color:mediumblue">echo $response;
"color:red">?>
