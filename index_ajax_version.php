<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Vue dischi</title>
</head>

<body>
    <div id="app" class="container">
        <header>
            <img src="img/spotifyLogo.png" alt="Spotify Logo">
            <select @change="filterByAuthor" v-model="selectedAuthor">
                <option>All</option>
                <option v-for="author in authorLibrary">{{author}}</option>
            </select>
        </header>
        <main>
            <div class="wrapper">
                <div class="albumContainer" v-for="singleAlbum in library">
                    <div class="album">
                        <img :src="singleAlbum.poster" alt="Foto Album">
                        <h4>{{singleAlbum.title}}</h4>
                        <p>{{singleAlbum.author}}</p>
                        <p>{{singleAlbum.year}}</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="app.js"></script>

</body>

</html>