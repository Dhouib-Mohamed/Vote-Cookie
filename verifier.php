<?php
$alert = "Vote enregistrée";
if(!isset($_COOKIE["form"])){
    $reponse = $_POST["reponse"];
    setcookie($name="form",$value = $reponse,$expire = time()+120);
}
else{
    $cookie = $_COOKIE["form"];
    $alert='Vous avez deja voteé Ta reponse precedente est : '.$cookie;
}
$header = 'Location:index.php?msg='.$alert;
header("$header");
die();
?>