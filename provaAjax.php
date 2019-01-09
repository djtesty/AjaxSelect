<?php
$csv='lettura.csv';
$file=$csv;
$rows = file($file );
$provincia="";
$provincia=$_GET['provincia'];

foreach ($rows as $row) {
    $array_contents = explode(";", $row);
    if(strcmp($array_contents[1], $provincia)==0){
        echo "<option> $array_contents[2]</option>";
    }
}