<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="style.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ville de Moulins - Deuxième titre</title>
    </head>
    <body>
        <?php
        include ('includes/menu.inc.php');
        ?>
        <div class="container">

            <!-- BANNIERE -->

            <div class="banniere d-flex flex-column flex-lg-row justify-content-between">
                <div class="mx-auto my-3">
                    <div class="contenu">
                        <h1 class="mb-3">À la une</h1>
                        <h2 class="mb-3">Festival Viticole et gourmand</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta placeat doloremque corporis repellendus! Accusamus, temporibus!</p>
                        <a href="#" class="btn-arrondi">En savoir +</a>
                    </div>
                </div>
                <img class="img-fluid" src="images/banniere.jpg" data-bs-toggle="modal" data-bs-target="#modalImage"/>
            </div>


            <!-- DERNIERS EVENEMENTS -->


            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 text-center my-2">
                    <img class="img-fluid w-100" src="images/event1.jpg"/>
                </div>
                <div class="col-12 col-md-6 col-lg-4 text-center my-2">
                    <img class="img-fluid w-100" src="images/event2.png"/>
                </div>
                <div class="col-12 col-md-6 col-lg-4 text-center my-2">
                    <img class="img-fluid w-100" src="images/event3.jpg"/>
                </div>
            </div>





        </div>

        <?php
        include ('includes/bandeau.inc.php');
        include ('includes/contact.inc.php');
        include ('includes/footer.inc.php');
        ?>

        <!-- Modal -->
        <div class="modal fade" id="modalImage" tabindex="-1" aria-labelledby="modalImageLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="images/banniere.jpg"/>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    </body>
</html>