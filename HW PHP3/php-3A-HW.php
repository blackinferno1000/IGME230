<ol>
<?php
$colors = ["red","green","blue"];
foreach($colors as $value){
    echo "<li>$value</li>";
}
?>
</ol>
<ul>
<?php
   $links = ["RIT"=>"http://www.rit.edu",
   	"RPI"=>"http://www.rpi.edu",
   	"MCC"=>"http://www.monroecc.edu"];

   foreach($links as $key=>$value){
   	echo "<li><a href=$value>$key</a></li>";
   }
?>
</ul>