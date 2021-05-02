<header>
    <img src="img/spotifyLogo.png" alt="Spotify Logo">
    <select>
        <?php
        $author = [];
        $authorABC = [];
        for ($i = 0; $i < count($database); $i++) {
            $author[] = $database[$i]["author"];
            $authorABC = $author;
            sort($authorABC);
            echo " <option value=' " . $authorABC[$i] . " '> " . $i.$authorABC[$i] . "</option>";
        };
        ?>
    </select>
</header>