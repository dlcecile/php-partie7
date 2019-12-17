<?php
$page = "exercice 7";
include 'header.php';
$message1 = '';
$message2 = '';
if (!empty($_POST['gender']) & !empty($_POST['firstName']) & !empty($_POST['lastName'])) {
    if (isset($_FILES['userfile']) && $_FILES['userfile']['error'] == 0) {
        // Récupére le nom du fichier et son extension dans les tableaux concernés (pour récupérer les clés et les valeurs d'un tableau, utiliser le var_dump)
        $fileInfo = pathinfo($_FILES['userfile']['name']);
        // Récupère le chemin et l'extension du fichier
        $fileName = $fileInfo['basename'];
        $message1 = 'Bienvenue ' . trim(strip_tags($_POST['gender'])) . ' ' . trim(strip_tags($_POST['firstName'])) . ' ' . trim(strip_tags($_POST['lastName'])) . ' !!!';
        $message2 = 'Merci, votre fichier ' . htmlspecialchars($fileName) . ' a bien été pris en compte';
    } else {
        $message2 = 'Veuillez réessayer, l\'envoi de votre fichier n\'a pas abouti';
    }
} else {
    ?>
    <div class="jumbotron  d-flex flex-column align-items-center">
        <form action="exo7.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Vos coordonnées</legend>
                <label for="genderCivility">Civilité:</label>
                <select name="gender" class="form-control">
                    <option  class="form-group col-6" value="Madame">Madame</option>
                    <option class="form-group col-6" value="Monsieur">Monsieur</option>
                </select>
                <div class="form-group">
                    <label for="firstName">Nom</label>
                    <input class="form-control" type="text" id="firstName" name="firstName" placeholder="Dupont"/>
                </div>
                <div class="form-group">
                    <label for="lastName">Pénom</label>
                    <input class="form-control" type="text" id="lastName" name="lastName" placeholder="Bertrand"/>
                </div>
                <div class="form-group">
                        <label class="file" for="userfile">Votre fichier : </label>
                        <input class="form-control" type="file" name="userfile" id="userfile" />
                    </div>
                <div class="form-group">
                    <input class="btn btn-danger col-12 mt-4" type="submit" value= Envoyez  name= "submit ">
                </div>
            </fieldset>
        </form>        
    </div>
<?php } ?>
<p><?= $message1 ?> <br/> <?= $message2 ?></p>
<?php
include 'footer.php';
?>