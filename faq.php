<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="style.css"/>
        <script src="https://kit.fontawesome.com/b9049baba7.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ville de Moulins - FAQ</title>
    </head>
    <body>
        <?php
        include ('includes/menu.inc.php');
        ?>
        <div class="container">
            <div class="text-center py-4" id="partager">
                Partager : <i class="fa-brands fa-facebook-f"></i> <i class="fa-brands fa-twitter"></i> <i class="fa-brands fa-instagram"></i> <i class="fa-brands fa-linkedin-in"></i>
            </div>
            <h1 class="text-center mb-4">Foire Aux Questions</h1>
            
            <div class="accordion my-4" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Qu'est-ce que l'architecture Client-Serveur ?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            L’architecture client-serveur décrit le fonctionnement du processus permettant d’afficher une page web sur un navigateur. <br>
                            Elle met en œuvre deux acteurs :
                            <ol>
                                <li>Le <strong>client</strong>, c’est le navigateur. Il va recevoir du serveur le contenu HTML à interpréter, il va le traiter, et afficher à l’écran le résultat de ce traitement : le site internet. Le client peut également effectuer des demandes au serveur, on parle de requêtes HTTP.</li>
                                <li>Le <strong>serveur</strong>, lui, remplit deux missions : le stockage (fichiers PHP / HTML, fichiers images et divers, base de données…) et l’interprétation requêtes HTTP. </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Un site, c'est quoi ?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            La définition la plus simple que l’on peut donner d’un site web serait la suivante : <br><br>
                            <strong>C’est un ensemble de fichiers stockés sur un serveur dont l’interprétation permet de renvoyer un document HTML utilisable par le client (le navigateur).</strong>
                            <br><br>
                            Ces fichiers sur le serveur peuvent interagir entre eux, permettre d’effectuer des opérations complexes comme échanger avec la base de données, effectuer des appels à d’autre sites via API. Traiter ces opérations est le rôle du serveur. 
                            Prenons un exemple simple : un site avec une seule page html. Mon site consistera donc en un seul fichier html, que je vais nommer index.html car le mot clé index est le nom de fichier par défaut que le serveur va nous renvoyer. HTML veut dire HyperText Markup Language. 

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Question 3
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Réponse 3
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Question 4
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Réponse 4
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Pourquoi ne pas vivre à Moulins
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Eh pourquoi pas c'est pas si mal
                        </div>
                    </div>
                </div>
            </div>










        </div>






        <?php
        include ('includes/bandeau.inc.php');
        ?>
        <!-- MODULE CONTACT -->

        
        <?php
        include ('includes/footer.inc.php');
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    </body>
</html>