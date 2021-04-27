<!-- Stampare a schermo i dischi musicali (vedi screenshot).
Oggi sarà da consegnare solo la prima Milestone, 
concentratevi esclusivamente su quella parte.

Milestone 1: Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento
della pagina ci saranno tutti i dischi.

Milestone 2: Attraverso l’utilizzo di AXIOS: al caricamento della pagina AXIOS chiederà attraverso una chiamata i dischi
a php e li stamperà attraverso VUEJS.

Bonus: Attraverso un’altra chiamata AXIOS, filtrare gli album per artista. -->

<?php
include __DIR__ . '/database.php';
var_dump($database)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Vue dischi</title>
</head>

<body>
    <div id="app" class="container">
        <header>
            <img src="img/spotifyLogo.png" alt="Spotify Logo">
            <select>
                <option>genere</option>
            </select>
        </header>
        <main>
            <div class="wrapper">
                

                        <?php
                        foreach ($database as $album) {
                            echo " <div class='albumContainer'> ";
                                echo " <div class='album'> ";
                                    echo " <img src=' ".$album["poster"]." ' alt='Foto Album'>";
                                    echo "<h4>" . $album["title"] . "</h4>";
                                    echo "<p>" . $album["author"] . "</p>";
                                    echo "<p>" . $album["year"] . "</p>";
                                echo " </div> ";
                            echo " </div> ";
                            
                        }
                        ?>
                          
                
            </div>
        </main>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="app.js"></script> -->
</body>

</html>