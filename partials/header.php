<header>
    <img src="img/spotifyLogo.png" alt="Spotify Logo">
    <select>
        <?php
        $authorABC = [];
        for ($i = 0; $i < count($database); $i++) {
            sort($authorABC);
            $authorABC[] = $database[$i]["author"];
            echo " <option value=' " . $authorABC[$i] . " '> " . $authorABC[$i] . "</option>";
        };
        ?>
    </select>
</header>