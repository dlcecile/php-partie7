<?php
$page = "exercice 5";
include 'header.php';

if (!empty($_GET['gender']) & !empty($_GET['firstName'])& !empty($_GET['lastName'])){
    echo 'Bienvenue '.trim(strip_tags($_GET['gender'])). ' '.trim(strip_tags($_GET['firstName'])) . ' '.trim(strip_tags($_GET['lastName'])). ' !!!';
}
else{
   echo 'Veuillez remplir le formulaire entièrement';
}
?>
<div class="jumbotron  d-flex flex-column align-items-center">
    <form action="exo5.php" method="GET">
        <fieldset>
            <legend>Vos coordonnées</legend>
            <label for="civility">Civilité:</label>
            <select name="gender" class="form-control">
                <option  class="form-group col-6" value="Madame">Madame</option>
                <option class="form-group col-6" value="Monsieur">Monsieur</option>
            </select>
            <div class="form-group">
                <label for="firstName"></label>
                <input class="form-control" type="text" id="firstName" name="firstName" placeholder="Dupont"/>
            </div>
            <div class="form-group">
                <label for="lastName"></label>
                <input class="form-control" type="text" id="lastName" name="lastName" placeholder="Bertrand"/>
            </div>
            <div class="form-group">
                <input class="btn btn-danger col-12 mt-4" type="submit" value= Envoyez  name= "submit ">
            </div>
        </fieldset>
    </form>        
</div>
<?php
include 'footer.php';
?>