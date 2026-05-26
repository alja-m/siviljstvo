<?php

include "db.php";

?>

<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerija</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
   
</head>
<body>

<?php
    include 'nav.php';
    ?>
    
    <div class="container my-5">
        <h1 class="mb-4 text-center">FOTOGRAFIJE PRETEKLIH PROJEKTOV</h1>

        <section class="gallery-section">
            <h2 class="text-muted h4 mb-3">Maturantske obleke</h2>
            <div class="image-row">
                <img src="maturantska1.jpg" alt="Obleka 1">
                <img src="maturantska2.jpg" alt="Obleka 2">
                <img src="maturantska3.jpg" alt="Obleka 3">
                <img src="maturantska4.jpg" alt="Obleka 4">
                <img src="maturantska5.jpg" alt="Obleka 5">
            </div>

            <h2 class="text-muted h4 mt-5 mb-3">Narodna noša</h2>
            <div class="image-row">
                <img src="narodna1.jpg" alt="Narodna noša 1">
                <img src="narodna2.jpg" alt="Narodna noša 2">
            </div>

            <h2 class="text-muted h4 mt-5 mb-3">Gledališki in pustni kostumi</h2>
            <div class="image-row">
                <img src="pust1.jpg" class="kostum-slika" alt="Kostum 1">
                <img src="pust2.jpg" class="kostum-slika" alt="Kostum 2">
                <img src="pust3.jpg" class="kostum-slika" alt="Kostum 3">
                <img src="pust4.jpg" class="kostum-slika" alt="Kostum 4">
                <img src="pust5.jpg" class="kostum-slika" alt="Kostum 5">
            </div>

            <h2 class="text-muted h4 mt-5 mb-3">Poročne obleke</h2>
            <div class="image-row">
                <img src="porocna1.jpg" alt="Poročna obleka 1">
                <img src="porocna2.jpg" alt="Poročna obleka 2">
            </div>
        </section>
    </div>

    <?php
    include 'footer.php';
    ?>


</body>
</html>