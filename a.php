<?php
$Etudiants = [
    ["Sourabie", "Rahim", 10],
    ["A", "B", 14],
    ["S", "R", 16],
    ["S", "m", 18]
];

$Sommenote = 0;
$NombreEtudiants = count($Etudiants);

foreach ($Etudiants as $Etudiant) {
    $prenom = $Etudiant[0];
    $nom = $Etudiant[1];
    $note = $Etudiant[2]; // Note is at index 2

    echo $prenom . " " . $nom . " : " . $note . "</br>";
    
    if ($note >= 16) {
        echo "Mention Tres bien</br>";
    } elseif ($note >= 14) {
        echo "Mention Bien</br>";
    } elseif ($note >= 10) {
        echo "Mention Passable</br>";
    } else {
        echo "Insuffisant</br>";
    }
    
    $Sommenote += $note;
    echo "</br>";
}

if ($NombreEtudiants > 0) {
    $Moyenneclasse = $Sommenote / $NombreEtudiants;
    echo "La moyenne generale de la classe est : " . $Moyenneclasse . "</br>";
}
?>

