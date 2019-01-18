<?php
$colors = array( "#FF0000", "#FF8000", "#FFFF00", "#00FF00", "#0000FF", "#BF00FF" );
$name = array("Hortence","Clément", "Kevin", "Romain", "Laurine","Thib");
$nbrName = count($name);


// foreach ($colors as $value) {
// 	echo"<div class='toto' style='background-color: $value;'></div>";
// 	monMsg($value); 

// }

function random_color() {
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
}

for ($j = 0; $j < $nbrName; $j++)
{
	echo"<div class='toto' style='background-color:"; 
	echo random_color();
	echo"'>$name[$j]</div>";
}



// $a =0;
// $b =0;
// $c =0;

// for ($i=1; $i<=5 ; $i++) { 
// 	$a+=100;
//     $b+=50;
//    	$c+=10;}
               
// echo"a=".$a." b=".$b." c=".$c;

// $d =1;
// while ($d <6){
// 	echo"</br>Le chiffre D=".$d++;
// }
// ?>

