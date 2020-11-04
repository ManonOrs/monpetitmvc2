<?php
include_once PATH_VIEW . "header.html";
echo "<p>Nombre de commandes trouvés" . count($commandes) . "</p>";
foreach ($commandes as $commande)
{
    echo $commande->getId() . " " . $commande->getTitreCli() . " " . $commande->getPrenomCli() . " " . $ccommande->getNomCLi() . "<br>"; 
}
include_once PATH_VIEW . "footer.html";
