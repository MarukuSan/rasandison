<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" media="only screen and (min-width: 1300px)" href="./style/general.css" type="text/css">
        <link rel="stylesheet" media="only screen and (max-width: 1300px)" href="./style/phone.css" type="text/css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <title>Mes fichiers</title>
    </head>
    <body>
        <header>
            <p id="monLogo"><a href="index.php">monLogo</a></p>
        </header>

        <section class="feuille">
            <h1>Mettre en ligne</h1>
            
            <form action="uploader.php" method="post" enctype="multipart/form-data">
                <label for="fileUpload">Fichier:</label>
                <input type="file" name="photo" id="fileUpload">
                <input type="submit" name="submit" value="Upload">
                <p><strong>Note:</strong> Seuls les formats .pdf, .jpg, .jpeg, .jpeg, .gif, .png sont autorisés jusqu'à une taille maximale de 10 Mo.</p>
            </form>
        </section>

        <section class="feuille">
            <h1>Mes fichiers</h1>
            
            <?php 
                $files = scandir("./transfert");

                foreach($files as $file) {
                    if($file != '.' and $file != '..' and $file != '.htaccess') {
                        echo "<p><a href='./transfert/".$file."'>".$file."</a></p>";
                    }
                }
            ?>
            
        </section>
    </body>
</html>