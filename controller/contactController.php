<?php 

    require_once("../model/Contact_db.php");

    // Ajouter
    if (isset($_POST['frmAddContact'])) {
       extract($_POST); 

        

        $result = addContactSms( $nom,  $prenom, $email,$message, 1,date('Y-m-d') );
        if ($result == 1) {
            header("location:home?error=Non");
        }
    }
    
    // Supprmer
    if (isset($_GET["action"])) {
       if ($_GET["action"] == "delete") {
       $result = supprimerContact($_GET["idContact"]);
        if ($result == 1) {
            header("location:admin?error=Non");
        }
        else 
        {
            header("location:admin?error=Oui");
        }
       }
       }
       ?>

