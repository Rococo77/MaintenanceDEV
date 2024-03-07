<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Upload</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    </head>
<body>
    <div class = "container">
        <div class="corp">
            <?php require 'header.php'; ?>
            <div class="form">
                <form action="systupload.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload" name="submit">
                </form>
                <a href="index.php">Retour</a>
            </div>
           <?php require 'footer.php'; ?>
        </div>
    </div>
</body>
</html>