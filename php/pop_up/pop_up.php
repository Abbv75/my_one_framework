<?php
    if(isset($_GET['e'])){
        if($_GET['e']==1){
?>
            <h1 class="pop_up">ancien mot de passe incorrecte</h1>
<?php
        }
        if($_GET['e']==2){
?>
            <h1 class="pop_up">Veuillez remplir le formulaire</h1>
<?php
        }
        if($_GET['e']==3){
?>
            <h1 class="pop_up">Mot de passe ou login incorrecte</h1>
<?php
        }
        if($_GET['e']==4){
?>
            <h1 class="pop_up">Une erreur est survenue</h1>
<?php
        }if($_GET['e']==5){
?>
            <h1 class="pop_up">E-mail incorrecte.Il se peut que vous n'avez pas enregistrer d'adresse e-mail en tant que login pour votre compte. Si c'est le cas, contactez notre service client pour regler ce probleme.</h1>
<?php
        }
        if($_GET['e']==6){
?>
            <h1 class="pop_up">Un code a 6 chiffres a ete envoyer a votre email <?php echo($_COOKIE['email']); ?> . Saisissez le.</h1>
<?php
        }
        if($_GET['e']==7){
?>
            <h1 class="pop_up">Code incorrecte. le code a ete envoyer a votre email <?php echo($_COOKIE['email']); ?></h1>
<?php
        }
        if($_GET['e']==8){
?>
            <h1 class="pop_up">Saisissez votre nouveau mot de passe</h1>
<?php
        }
    }
?>