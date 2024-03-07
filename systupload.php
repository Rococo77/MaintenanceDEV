<?php

if(isset($_POST["submit"])) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

    // Check if file is a PDF
    if($fileType != "pdf" || $fileType != "jpeg" || $fileType != "png" || $fileType != "jpg") {
        echo "Pas le bon format  de fichier.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Le fichier existe déjà.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Le fichier est trop volumineux.";
        $uploadOk = 0;
    }

    // Upload file if all checks pass
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "Le fichier ". basename( $_FILES["fileToUpload"]["name"]). " a été uploadé avec succès.";
        } else {
            echo "Une erreur est survenue lors de l'upload du fichier.";
        }
    }
}

