<?php
class movie
{
    public $titolo;
    public $anno;
    public $genere;
    // costructor
    function __construct($_titolo, $_genere,)
    {
        $this->titolo = $_titolo;
        $this->genere = $_genere;
    }

    // funzione che determina se  il film è una nuova uscita o no
    function setNuovaUscita($_anno)
    {
        if ($_anno === 2024) {
            echo "Nuova Uscita";
        } else {
            echo "uscito da qualche anno";
        }
    }
}

// primo movie
$movie1 = new movie("viaggio al centro della terra", "fantasy");
echo $movie1->titolo;
$anno = 2022;
echo $anno;
echo $movie1->genere;
$movie1->setNuovaUscita($anno);

// secondo movie
$movie2 = new movie("beekeper", "azione");
echo $movie2->titolo;
$anno = 2024;
echo $anno;
echo $movie2->genere;
$movie2->setNuovaUscita($anno);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movie php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>rappresentazione grafica in html</h1>
        <div>
            <!--primo movie-->
            <div class="movie1">
                <?php
                echo "<span class='titolo'> Titolo : </span>" . $movie1->titolo;
                ?>
                <div>
                    <?php
                    echo "<span class='titolo'> genere : </span>" . $movie1->genere;
                    ?>
                </div>
                <div>
                    <?php
                    echo "<span class='titolo'> anno : </span>" . $anno = 2022;
                    ?>
                </div>
                <div>
                    <?php
                    $movie1->setNuovaUscita($anno);
                    ?>
                </div>
            </div>
            <!--secondo movie-->
            <div class="movie2">
                <?php
                echo "<span class='titolo'> Titolo : </span>" . $movie2->titolo;
                ?>
                <div>
                    <?php
                    echo "<span class='titolo'> genere : </span>" . $movie2->genere;
                    ?>
                </div>
                <div>
                    <?php
                    echo "<span class='titolo'> anno : </span>" . $anno = 2024;
                    ?>
                </div>
                <div>
                    <?php
                    $movie1->setNuovaUscita($anno);
                    ?>
                </div>

            </div>
        </div>
    </main>
</body>

</html>