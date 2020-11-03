<?php
include_once PATH_VIEW . "header.html";
echo "<p>Nombre de clients trouvés : ".count($clients) ."</p>";

foreach ($client as $clients){
    echo $client->getId() . " " . $client->getTitreCli() . " " . $client->getPrenomCli() . " " . $client->getNomCli() . "<br>";
}
include_once PAT_VIEW . "footer.html";
