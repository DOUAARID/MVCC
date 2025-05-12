<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title><?= $titre ?></title>
</head>
<body>
    <?php require_once'include/nav.php';?>
    <div class="container mt-4">
        <h2><?= $titre ?></h2>
        <?= $contenu; ?> <!-- Affiche proprement le contenu HTML -->
        
    </div>
</body>
</html>
