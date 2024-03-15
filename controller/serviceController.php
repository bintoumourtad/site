<?php 

    require_once("../model/service_db.php");

    // Ajouter
    if (isset($_POST['frmAddService'])) {
       extract($_POST); 

        

        $result = addServiceSms( $nom,  $photo, $description,$etat, date('Y-m-d'), $message, 1);
        if ($result == 1) {
            header("location:home?error=Non");
        }
    }
    
    // Supprmer
    if (isset($_GET["action"])) {
       if ($_GET["action"] == "delete") {
       $result = supprimeService($_GET["idService"]);
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

