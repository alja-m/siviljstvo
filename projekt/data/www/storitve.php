<?php

include "db.php";

?>
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Šiviljstvo Novak</title>
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


    <header class="hero-section text-center">

     <div class="container py-4">
        <h1 class="h1">STORITVE</h1>
    </div>
    <img src="storitve.png" class="img-fluid w-100" alt="Šiviljska oprema">
   

<main class="container my-5">

    <div class="row g-4 justify-content-center">
        <!-- Kartica 1: Izdelava oblačil -->
        <div class="col-md-4">
            <div class="card service-card h-100 shadow-sm border-0" data-bs-toggle="modal" data-bs-target="#modalOblačila">
                <div class="card-body text-center p-4">
                    <h5 class="card-title fw-bold">Izdelava oblačil po meri</h5>
                    <p class="card-text text-muted small">Unikatna oblačila, ki se popolnoma prilagajajo vašim željam.</p>
                    <span class="btn btn-link p-0 text-decoration-none">Preberi več...</span>
                </div>
            </div>
        </div>

        <!-- Kartica 2: Posebne priložnosti -->
        <div class="col-md-4">
            <div class="card service-card h-100 shadow-sm border-0" data-bs-toggle="modal" data-bs-target="#modalPriložnosti">
                <div class="card-body text-center p-4">
                    <h5 class="card-title fw-bold">Obleke za posebne priložnosti</h5>
                    <p class="card-text text-muted small">Birmanske, maturantske in poročne obleke za vaš nepozaben dan.</p>
                    <span class="btn btn-link p-0 text-decoration-none">Preberi več...</span>
                </div>
            </div>
        </div>

        <!-- Kartica 3: Popravila -->
        <div class="col-md-4">
            <div class="card service-card h-100 shadow-sm border-0" data-bs-toggle="modal" data-bs-target="#modalPopravila">
                <div class="card-body text-center p-4">
                    <h5 class="card-title fw-bold">Popravilo oblačil</h5>
                    <p class="card-text text-muted small">Krajšanje, ožanje in popravila vseh vrst tekstila.</p>
                    <span class="btn btn-link p-0 text-decoration-none">Preberi več...</span>
                </div>
            </div>
        </div>
    

    <!-- Kartica 4: Skupine in organizacije -->
<div class="col-md-4">
    <div class="card service-card h-100 shadow-sm border-0" data-bs-toggle="modal" data-bs-target="#modalSkupine">
        <div class="card-body text-center p-4">
            <h5 class="card-title fw-bold">Obleke za skupine in organizacije</h5>
            <p class="card-text text-muted small">Enotna in profesionalna oblačila za pevske zbore, gostince in društva.</p>
            <span class="btn btn-link p-0 text-decoration-none">Preberi več...</span>
        </div>
    </div>
</div>

<!-- Kartica 5: Gledališče in pust -->
<div class="col-md-4">
    <div class="card service-card h-100 shadow-sm border-0" data-bs-toggle="modal" data-bs-target="#modalGledalisce">
        <div class="card-body text-center p-4">
            <h5 class="card-title fw-bold">Gledališki in pustni kostumi</h5>
            <p class="card-text text-muted small">Izdelava unikatnih kostumov po vaših idejah za nastope in zabave.</p>
            <span class="btn btn-link p-0 text-decoration-none">Preberi več...</span>
        </div>
    </div>
</div>

<!-- Kartica 6: Narodne noše -->
<div class="col-md-4">
    <div class="card service-card h-100 shadow-sm border-0" data-bs-toggle="modal" data-bs-target="#modalNose">
        <div class="card-body text-center p-4">
            <h5 class="card-title fw-bold">Narodne noše in folklora</h5>
            <p class="card-text text-muted small">Ohranjanje tradicije z avtentičnimi kroji in materiali za folklorne skupine.</p>
            <span class="btn btn-link p-0 text-decoration-none">Preberi več...</span>
        </div>
    </div>
</div>
</div>

    <!-- MODALNA OKNA (Pojavna okna) -->

    <!-- Modal 1: Izdelava oblačil -->
    <div class="modal fade" id="modalOblačila" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold">Izdelava oblačil po meri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Pri nas verjamemo, da mora biti oblačilo udobno, kakovostno in prilagojeno posamezniku. Izdelujemo unikatna oblačila po vašem okusu.</p>
                    <h6 class="fw-bold mt-4">Primer cenika:</h6>
                    <ul class="list-unstyled">
                        <li>• Izdelava krila po meri – od 40 €</li>
                        <li>• Izdelava hlač po meri – od 60 €</li>
                        <li>• Izdelava obleke po meri – od 80 €</li>
                    </ul>
                    <p class="small text-muted fst-italic">Cene se lahko razlikujejo glede na material in zahtevnost.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2: Posebne priložnosti -->
    <div class="modal fade" id="modalPriložnosti" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold">Obleke za posebne priložnosti</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Izdelujemo obleke za: birmo, valeto, maturantske plese in poroke. Skupaj izberemo kroj in barvo, ki vam najbolje pristaja.</p>
                    <h6 class="fw-bold mt-4">Primer cenika:</h6>
                    <ul class="list-unstyled">
                        <li>• Svečana obleka – od 90 €</li>
                        <li>• Maturantska obleka – od 120 €</li>
                        <li>• Poročna obleka – po dogovoru</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3: Popravila -->
    <div class="modal fade" id="modalPopravila" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold">Popravilo oblačil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Najpogostejša popravila vključujejo krajšanje hlač, menjavo zadrg, krpanje in menjavo podlog.</p>
                    <h6 class="fw-bold mt-4">Cenik:</h6>
                    <ul class="list-unstyled">
                        <li>• Krajšanje hlač – od 8 €</li>
                        <li>• Menjava zadrge – od 12 €</li>
                        <li>• Krajšanje zaves – od 10 €</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<!-- Modal 4: Skupine -->
<div class="modal fade" id="modalSkupine" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold">Obleke za skupine in organizacije</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Izdelujemo enotna oblačila, ki dajejo profesionalen videz. Poskrbimo, da so oblačila praktična in vizualno usklajena.</p>
                <h6 class="fw-bold mt-3">Izdelujemo:</h6>
                <ul class="small">
                    <li>Obleke za pevske zbore</li>
                    <li>Delovna oblačila za gostince</li>
                    <li>Druga enotna oblačila za skupine</li>
                </ul>
                <h6 class="fw-bold mt-3">Cenik:</h6>
                <ul class="list-unstyled small">
                    <li>• Zborovska obleka – od 70 €</li>
                    <li>• Telovnik za gostince – od 50 €</li>
                    <li>• Komplet po meri – po dogovoru</li>
                </ul>
                <p class="small text-muted mt-2">Pri večjih naročilih je možen popust.</p>
            </div>
        </div>
    </div>
</div>

<!-- Modal 5: Gledališče -->
<div class="modal fade" id="modalGledalisce" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold">Gledališki in pustni kostumi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Kostume lahko izdelamo po vaših idejah, skicah ali glede na temo dogodka. Poskrbimo za udobje in vizualno privlačnost.</p>
                <h6 class="fw-bold mt-3">Primeri cen:</h6>
                <ul class="list-unstyled small">
                    <li>• Enostaven kostum – od 50 €</li>
                    <li>• Gledališki kostum – od 80 €</li>
                    <li>• Kostum po posebnem naročilu – po dogovoru</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Modal 6: Narodne noše -->
<div class="modal fade" id="modalNose" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold">Narodne noše in folklorna oblačila</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Posebno pozornost namenjamo ohranjanju slovenske kulturne dediščine. Izdelujemo avtentične narodne noše po tradicionalnih krojih.</p>
                <h6 class="fw-bold mt-3">Cenik:</h6>
                <ul class="list-unstyled small">
                    <li>• Posamezni del noše – od 80 €</li>
                    <li>• Komplet folklorne noše – po dogovoru</li>
                </ul>
                <p class="small text-muted mt-2">Cena se določi glede na zahtevnost in materiale.</p>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</main>

<?php
    include 'footer.php';
    ?>

    </html>