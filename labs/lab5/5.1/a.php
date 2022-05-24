<?php

function myfun($myarr)
{
	foreach ($myarr as $key=>$value)
	{
		 echo '<button>'.' '.$value.'</button>';
	}
}

$frut=array('1'=>"BMW",
 '2'=>"Audi",
 '3'=>'Honda',
 '4'=>'Toyota',
 '5'=>'Lexus',
 '6'=>'Lada');

echo myfun($frut);
 

?>