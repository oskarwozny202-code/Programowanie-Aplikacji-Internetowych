<?php
$plik=fopen("owoce.txt","r");
$wiersz=fgetcsv($plik);
$owoce=explode(",",$wiersz); //tablica
foreach($owoce as $owoc) {
    echo $owoc."<br>";
}
var_dump($owoce);
?> 
