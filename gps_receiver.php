<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    // Afficher les données reçues
    echo "Latitude: " . $latitude . "<br>";
    echo "Longitude: " . $longitude . "<br>";

    // Enregistrer les données dans un fichier texte (ou une base de données)
    $file = 'gps_data.txt';
    $current = file_get_contents($file);
    $current .= "Latitude: " . $latitude . ", Longitude: " . $longitude . "\n";
    file_put_contents($file, $current);

    // Réponse au module SIM808
    echo "Données reçues.";
} else {
    echo "Méthode non autorisée.";
}
?>
