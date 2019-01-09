<?php

class letturaScrittura {
    public $file;
    public $rows;
    

function __construct() {
    
    $csv='lettura.csv';
    $this->file=$csv;
    
    // Controllo se il file È leggibile
    if ( ! is_readable( $csv ) ) {
        die( 'Il file non È leggibile oppure non esiste!' );
}

    }
    function aperturaFile(){
            $var=fopen($this->file,"r");
            $this->rows = file($this->file );
            fclose($var);
}

function prendiVal(){
    foreach ($this->rows as $row) {
            $array_contents = explode(";", $row);
                $provincia[]=$array_contents[1];
            }
        return $provincia;
}

/*function prendiVal2($provincia){
    foreach ($this->rows as $row) {
    $array_contents = explode(";", $row);
    if(strcmp($array_contents[1], $provincia)==0){
        echo "<option> $array_contents[2]</option>";
    }
}
    
}*/
        
}



      