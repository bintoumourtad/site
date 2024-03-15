
<?php 

    require_once("db.php");

    // Permet de recuperer la liste des contact depuis la bd
    function listeService()
    {
        try {
            $req = "SELECT * FROM  service s WHERE c.etat=1";
            return getConnexion()->query($req);
        } catch (PDOException $error) {
            die("Impossible de recuperer la liste des contact " . $error->getMessage());
        }
    }

   
    // Permet de d'ajouter une service dans la bd
    function addServiceSms($nom, $photo, $description, $etat,$date)

    {
        try {
            $req = "INSERT INTO service s VALUES(null, '$nom','$photo', '$description', '$etat' ,  date('Y-m-d h:m:i'), 1)";
            return getConnexion()->exec($req);
        } catch (PDOException $error) {
            die("Une erreur s'est produit lors de l'envoie " . $error->getMessage());
        }
    }


    // Permet de supprinmer la liste des contact cupprimées depuis la bd
    function supprimerService($idService)
    {
        try {
            $req = "UPDATE  service s SET c.etat=0 WHERE c.id='$idService'";
            return getConnexion()->query($req);
        } catch (PDOException $error) {
            die("Impossible de supprimer la service d'identifiant " 
            . $idService . ' ' . $error->getMessage());
        }
    }

    
?>














