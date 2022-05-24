<?php

$lastName = $_POST["lastName"];
$age = $_POST["age"];
$email = $_POST["email"];
$mass = $_POST["mass"];

$langToDate = [
	"english" => "13/3/22 8.30",
       	"germany" => "14/3/22 10.05",
	"chinese" => "13/3/22 10.05",
	"italian" => "15/3/22 8.30",	

];

echo "<div> Mail: $email </div>";
echo "<div> Age: $age </div>";
echo "<div> Last Name: $lastName </div>";

foreach($mass as $l){
	echo "<div> Kyrs \" $l\" $langToDate[$l] </div>";
};

?>
