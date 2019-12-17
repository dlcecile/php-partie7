<?php
$page = "exercice5";
include 'header.php';
$firstName = '';
$lastName = '';
$gender = '';
if(isset($_GET['firstName'])){
    $firstName = $_GET['firstName'];
}
if(isset($_GET['lastName'])){
    $lastName = $_GET['lastName'];
}
if(isset($_GET['gender'])){
    $gender = $_GET['gender'];
}
if (empty($_gender) & empty($_firstName) & empty($lastName)){
    echo $gender. $firstName.$lastName;
}
else
?>
    <div class=" jumbotron d-flex  flex-column align-items-center">
    <p>Bienvenue <?= $gender. ' '.$firstName . ' '.$lastName. ' !!!'?></p>
    </div>
<?php
include 'footer.php';
?>