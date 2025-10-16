<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affiche ton image</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 20px;">

    <h2>💬 Donne une URL d'image</h2>

    <form method="GET" action="">
        <input type="text" name="imgurl" placeholder="https://exemple.com/image.webp" style="width: 400px;" required>
        <button type="submit">Afficher</button>
    </form>

    <?php
    if (isset($_GET['imgurl'])) {
        $url = htmlspecialchars($_GET['imgurl']);

        // Optionnel : sécurise un peu plus l'entrée si besoin
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            echo "<h3>🎯 Image :</h3>";
            echo "<img src='$url' alt='Image de l’URL' style='max-width: 600px; border:1px solid #ccc;'><br><br>";
            echo "<h3>🔗 Lien vers l'image :</h3>";
            echo "<a href='$url' target='_blank'>$url</a>";
        } else {
            echo "<p style='color:red;'>❌ URL non valide.</p>";
        }
    }
    ?>

</body>
</html>