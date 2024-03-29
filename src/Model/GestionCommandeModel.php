<?php

namespace APP\Model;

use PDO;
use APP\Entity\Commande;
use Tools\Connexion;


class GestionCommandeModel 
{
    public function findCommande($id) 
    {
        $unObjetPdo = Connexion::getConnexion();
        $sql = "select * from COMMANDE where id=:id";
        $ligne = $unObjetPdo->prepare($sql);
        $ligne->bindValue(':id', $id, PDO::PARAM_INT);
        $ligne->execute();
        return $ligne->fetchObject(Commande::class);
    }
    
    public function findAllCommande()
    {
        $unObjetPdo = Connexion::getConnexion();
        $sql = "select * from COMMANDE";
        $lignes = $unObjetPdo->query($sql);
        return $lignes->fetchAll(Commande::class);
    }
    
}