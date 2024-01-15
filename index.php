<?php
class movie{
    public $titolo;
    public $anno;
    public $genere;
    // costructor
    function __construct($_titolo,$_genere){
        $this->titolo = $_titolo;
        $this ->genere = $_genere;
    }
    
    // funzione che determina se  il film è una nuova uscita o no
    function setNuovaUscita($_anno){
        if($_anno === 2024){
             echo "Nuova Uscita";
        }else{
            echo "uscito da qualche anno";
        }
    }
}

// primo movie
$movie1 = new movie("viaggio al centro della terra","fantasy");
echo $movie1->titolo;
$anno = 2022;
echo $anno;
echo $movie1->genere;
$movie1-> setNuovaUscita($anno);

// secondo movie
$movie2 = new movie("beekeper","azione");
echo $movie2 -> titolo;
$anno = 2024;
echo $anno;
echo $movie2 ->genere;
$movie2 -> setNuovaUscita($anno);
?>