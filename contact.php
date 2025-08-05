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
        <title>Ville de Moulins - Contact</title>
    </head>
    <body>
        <?php
        include ('includes/menu.inc.php');
        var_dump($_POST);
        if(!empty($_POST)) {
            echo "Bonjour " . $_POST['prenom'] . " " . $_POST['nom'];
        } else {
            echo "Bonjour illustre inconnu";
        }
        ?>
        <div class="container py-4">
            <form method="POST" action="contact.php">

                <!-- INPUT DE TYPES TEXTES -->

                <input type="text" name="nom" placeholder="Nom" maxlength="10"/>
                <input type="text" name="prenom" placeholder="Prénom"/>
                <input type="number" name="age" min="0" max="20" placeholder="Âge"/>
                <br><br>
                <input type="password" name="password" placeholder="Mot de passe" minlength="10"/>
                <input type="email" name="email" placeholder="E-mail"/>
                <br><br>
                <textarea name="mon_texte" rows="6" cols="50"></textarea>
                <br><br>
                <!-- INPUT DE TYPES SELECTION -->
                <select name="departement">
                    <option value="">Choisissez votre département</option>
                    <option value="42">Loire</option>
                    <option value="03">Allier</option>
                    <option value="63">Puy-de-Dôme</option>
                    <option value="43">Haute-Loire</option>
                    <option value="23">Creuse</option>
                    <option value="38">Isère</option>
                </select>

                <br><br>

                Sexe : <br>
                <input type="radio" name="sexe" value="H">
                <label for="H">Homme</label><br>
                <input type="radio" name="sexe" value="F">
                <label for="F">Femme</label><br>
                
                Comment êtes-vous habillés ? : <br>
                <input type="checkbox" name="habits[]" value="Chemise">
                <label for="Chemise">Chemise</label><br>
                <input type="checkbox" name="habits[]" value="Pantalon">
                <label for="Pantalon">Pantalon</label><br>
                <input type="checkbox" name="habits[]" value="Chaussettes">
                <label for="Chaussettes">Chaussettes</label><br>
                <input type="checkbox" name="habits[]" value="Chaussures">
                <label for="Chaussures">Chaussures</label><br>
                <input type="checkbox" name="habits[]" value="T-shirt">
                <label for="T-shirt">T-shirt</label><br>
                <input type="checkbox" name="habits[]" value="Short">
                <label for="Short">Short</label><br>
                <input type="checkbox" name="habits[]" value="Jupe">
                <label for="Jupe">Jupe</label><br>
                <input type="checkbox" name="habits[]" value="Robe">
                <label for="Robe">Robe</label><br>


                <button type="submit">Envoyer</button>
            </form>
        </div>
        <?php
        include ('includes/bandeau.inc.php');
        include ('includes/footer.inc.php');
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    </body>
</html>