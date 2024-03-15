
<?php 

    require_once("db.php");

    // Permet de recuperer la liste des contact depuis la bd
    function listeContact()
    {
        try {
            $req = "SELECT * FROM contact c WHERE c.etat=1";
            return getConnexion()->query($req);
        } catch (PDOException $error) {
            die("Impossible de recuperer la liste des contact " . $error->getMessage());
        }
    }

   
    // Permet de d'ajouter une service dans la bd
    function addContactSms($nom, $prenom, $email, $message)
    {
        try {
            $req = "INSERT INTO contact VALUES(null, '$nom','$prenom', '$email', '$message' ,  date('Y-m-d h:m:i'), 1)";
            return getConnexion()->exec($req);
        } catch (PDOException $error) {
            die("Une erreur s'est produit lors de l'envoie " . $error->getMessage());
        }
    }


    // Permet de supprinmer la liste des contact cupprimées depuis la bd
    function supprimerContact($idContact)
    {
        try {
            $req = "UPDATE contact c SET c.etat=0 WHERE c.id='$idContact'";
            return getConnexion()->query($req);
        } catch (PDOException $error) {
            die("Impossible de supprimer la service d'identifiant " 
            . $idContact . ' ' . $error->getMessage());
        }
    }

    
?>














