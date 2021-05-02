<?php

include __DIR__.'/partials/database.php';
header('Content-Type: application/json');

if(!empty($_GET["listAuthor"])) {
    $authorsArray = [];
    if($_GET["listAuthor"] == true) {
        foreach($database as $album) {
            if(!in_array($album["author"], $authorsArray)) {
                $authorsArray[] = $album["author"];
            }
        }
    }
    header('Content-Type: application/json');
    echo json_encode($authorsArray);
}
elseif (!empty($_GET["author"])) {
    
    foreach($database as $album) {
        if($album["author"] == $_GET["author"]) {
            $filteredLibrary[] = $album;
        }
    }
    header('Content-Type: application/json');
    echo json_encode($filteredLibrary);
}
else {
    header('Content-Type: application/json');
    echo json_encode($database);
}

?>