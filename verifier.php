<?php
if(!isset($_COOKIE["form"])){
    $reponse = $_POST["reponse"];
    setcookie($name="form",$value = $reponse,$expire = time()+120);
    ?><script>alert("Vote enregistrée");</script><?php
}
else{
    ?>
    <h4>Ta reponse precedente est : </h4><?php
    echo($_COOKIE["form"])
    ?>
    <script>alert("Vous avez deja voteé");</script><?php
}
?>