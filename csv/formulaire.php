<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

        <form action="formulaire.php" method="post" enctype="multipart/form-data">
            <div>
              <label for="file">Upload fichier csv</label>
              <input type="file" id="file" name="file" accept=".csv">
            </div>
            <div>
              <button>Envoyer</button>
            </div>
           </form>
    <!-- pour vérifier si bien upload en tmp
    <?php
    print_r($_FILES) 
    ?>
    -->
</body>
</html>