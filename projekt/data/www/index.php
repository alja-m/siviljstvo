<?php

include "db.php";

$query= "SELECT id, ime, email, sporocilo FROM sporocilo"
$stmt = $pdo -> prepare($query);
$stmt->execute();

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

     <div class="container py-3">
        <h1 class="h1">ŠIVILJSTVO NOVAK</h1>
        <p>OD LETA 1948</p>
    </div>
    <img src="siviljstvo.png" class="img-fluid w-100" alt="Šiviljska delavnica">

   
</header>
    <main class="container my-5">
        <section class="text-center mb-5">
            <h2 class="mb-3">O NAS</h2>
            <h5 class="text-muted">Družinsko podjetje s tradicijo</h5>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <p>Naše šiviljstvo temelji na družinski tradiciji štirih generacij šivilj, ki svoje znanje in ljubezen do ustvarjanja oblačil prenašajo iz roda v rod. Zgodba se je začela v majhni domači delavnici, kjer je prababica šivala oblačila za lokalne prebivalce. Njeno znanje so nadaljevale naslednje generacije, danes pa podjetje vodi že četrta generacija.
Združujemo tradicionalno znanje, ročno izdelavo in sodoben pristop, zato lahko vsaki stranki ponudimo kakovostno in unikatno rešitev. Poseben poudarek namenjamo tudi ohranjanju slovenske kulturne dediščine, predvsem pri izdelavi narodnih noš in folklornih oblačil.
Naše storitve so namenjene posameznikom, folklornim skupinam, pevskim zborom, gostincem ter vsem, ki potrebujejo kakovostna oblačila po meri ali strokovna popravila oblačil.</p>
                </div>
            </div>
        </section>

        <section class="testimonials py-5 px-4 rounded">
    <h3 class="text-center mb-4">Mnenja strank</h3>
    <div class="row g-4">
        
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <div class="text-warning mb-2">★★★★★</div>
                    <h6 class="card-title fw-bold">Zelo zadovoljna!</h6>
                    <p class="card-text small text-muted">Naročila sem poročno obleko po merah. Prezadovoljna s končnim izdelkom.</p>
                    <div class="d-flex align-items-center mt-3">
                        <i class="bi bi-person-circle fs-3 me-2"></i>
                        <div>
                            <small class="d-block fw-bold">Janja</small>
                            <small class="text-muted">5. 1. 2026</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <div class="text-warning mb-2">★★★★★</div>
                    <h6 class="card-title fw-bold">Odlična kvaliteta</h6>
                    <p class="card-text small text-muted">Naša folklorna skupina je ful vesela, da je obleke za nastop naročila ravno pri gospe Jani.:)</p>
                    <div class="d-flex align-items-center mt-3">
                        <i class="bi bi-person-circle fs-3 me-2"></i>
                        <div>
                            <small class="d-block fw-bold">Tian</small>
                            <small class="text-muted">24. 1. 2026</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <div class="text-warning mb-2">★★★★★</div>
                    <h6 class="card-title fw-bold">Skrajšane hlače</h6>
                    <p class="card-text small text-muted">Prinesel sem ženine hlače, ker so ji bile predolge. Zdaj so ji končno prav. Super šivilja!!</p>
                    <div class="d-flex align-items-center mt-3">
                        <i class="bi bi-person-circle fs-3 me-2"></i>
                        <div>
                            <small class="d-block fw-bold">Janez</small>
                            <small class="text-muted">5. 10. 2025</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

        <section class="map-section py-5">
    <div class="container text-center">
        <h3 class="mb-4">NAJDETE NAS TUKAJ</h3>
        <div class="map-responsive shadow-sm">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2744.026462768528!2d15.6384503!3d46.5471412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476f777641d40c0f%3A0xc3317f225725f16e!2sStrma%20ulica%2015%2C%202000%20Maribor!5e0!3m2!1ssl!2ssi!4v1714900000000!5m2!1ssl!2ssi" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

        <section class="contact-section py-5">
    <div class="container">
        <h3 class="text-center mb-4">STOPI V STIK Z NAMI</h3>
        <div class="row justify-content-center">
            <!-- Tu določiš širino: col-lg-5 pomeni manj kot pol zaslona -->
            <div class="col-12 col-md-8 col-lg-5">
                <form class="shadow-sm">
                    <div class="mb-3">
                        <label class="form-label">Ime</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Priimek</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sporočilo</label>
                        <textarea class="form-control" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Pošlji</button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="container"
<?php$podatki=$stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<table border="1">

<thead>id</thead>
<thead>ime</thead>
<thead>priimek</thead>
<thead>sporocilo</thead>

            <?php
            foreach ($podatki as $row){
            ?>
                <tr>
                    <td><?=$row["id"]; ?></td>
                    <td><?=htmlspecialchars [$row["ime"]]; ?></td>
                    <td><?=htmlspecialchars [$row["priimek"]]; ?></td>
                    <td><?=htmlspecialchars [$row["email"]]; ?></td>
                    <td><?=htmlspecialchars [$row["sporocilo"]]; ?></td>
            <?php
            }
            ?>

    <h2>Moji podatki</h2>

</tbody>
    </table>
</section>

    </main>

    <?php
    include 'footer.php';
    ?>


</body>
</html>