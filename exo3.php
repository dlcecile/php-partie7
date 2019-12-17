<?php
$page = "exercice 3";
include 'header.php';
?>
<div class="jumbotron  d-flex flex-column align-items-center">
    <form action="user.php" method="GET">
        <fieldset>
            <legend>Vos coordonnées</legend>
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