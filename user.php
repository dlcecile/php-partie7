<?php
$page = "exercice1-2-3-4";
include 'header.php';
$firstName = '';
$lastName = '';
if(isset($_GET['firstName'])){
    $firstName = $_GET['firstName'];
}
if(isset($_GET['lastName'])){
    $lastName = $_GET['lastName'];
}
if(isset($_POST['firstName'])){
    $firstName = $_POST['firstName'];
}
if(isset($_POST['lastName'])){
    $lastName = $_POST['lastName'];
}
?>
    <div class=" jumbotron d-flex  flex-column align-items-center">
    <p>Le nom est <?= $firstName ?></p>
    <p>Le prénom est <?= $lastName ?></p>
    </div>
<?php
include 'footer.php';
?>
    
    