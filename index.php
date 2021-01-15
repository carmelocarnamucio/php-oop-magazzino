<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php-oop-magazzino</title>
  </head>
  <body>

    <h2 class="container">

      <?php

        class Magazzino {
            public $name;
            public $location;
            public $content = [];

            public function __construct ($name, $location){
              $this -> name = $name;
              $this -> location = $location;
            }
        }

        class Prodotto {
          public $name;
          public $weight;
          public $price;

          public function prodotto($name,$weight,$price)
          {
            echo 'Nome Prodotto = ' . $this -> nome = $name;
            echo "<br>";
            echo 'Peso = ' . $this -> peso = $weight;
            echo "<br>";
            echo 'Prezzo = ' . $this -> prezzo = $price;
            echo "<br>";
          }
        }
        ?>
        <div class="container">

        <?php

        $magazzino1 = new Magazzino("A", "Roma");
        $magazzino1 -> content = "Tavoli, Sedie, Librerie";
        echo "I prodotti del magazzino " . $magazzino1 -> name . " (" . $magazzino1 -> location .  ") " . "sono: " . $magazzino1 -> content . "<br><br>";
        echo "Tavoli disponibili:";echo "<br><br>";

        $prodotto1 = new Prodotto("Homfa Tavolini da caffè", "22.8 kg ", "119,99 €" ); echo "<br>";
        $prodotto2 = new Prodotto("Tavolo Pieghevole da Giardino Bianco", "12.7 Kg", "31,99 €  " ); echo "<br>";
        ?>
        </div>
        <div class="container">

        <?php

        $magazzino2 = new Magazzino("B", "Milano");
        $magazzino2 -> content = "Smatphone, Lampade, Condizionatori";
        echo "I prodotti del magazzino " . $magazzino2 -> name . " (" . $magazzino2 -> location .  ") " . "sono: " . $magazzino2 -> content . "<br>";
        echo "Nessun prodotto disponibile"; echo "<br>";

        ?>
        </div>
        <div class="container">

        <?php

        $magazzino3 = new Magazzino("C", "Palermo");
        $magazzino3 -> content = "TV, Lavatrici , Frigoriferi";
        echo "I prodotti del magazzino " . $magazzino3 -> name . " (" . $magazzino3 -> location .  ") " . "sono: " . $magazzino3 -> content . "<br><br>";
        echo "TV disponibili:"; echo "<br><br>";

        $prodotto3 = new Prodotto("Samsung QE75Q60TAUXZT", "47.1 Kg", "1.907,86 € " ); echo "<br>";
        $prodotto4 = new Prodotto("LG 43UN71006LB.APID", "30 Kg", "440 € " ); echo "<br>";
        $prodotto5 = new Prodotto("PHILIPS 6800 Series 24PFS6805", "20 Kg", "239 € " );
        ?>
        </div>
        <div class="container">

        <?php

        $magazzinoRecap = new Magazzino("", "");


        echo "Nei nostri magazzini ci sono i seguenti prodotti:". "<br><br>";
        array_push($magazzinoRecap -> content, $prodotto1, $prodotto2, $prodotto3, $prodotto4, $prodotto5);

        foreach ($magazzinoRecap -> content as $key => $value) {
          echo '<div>' . $value -> nome . '</div>'. "<br>";
        }
      ?>
        </div>

    </h2>

  </body>
</html>
