<?php
$activiteiten = [];

echo "Hoeveel activiteiten wil je toeveogen ?";

$aantalActiviteiten = (int) readline();

if ($aantalActiviteiten <= 0) {
    echo "Voer een geldig aantal activiteiten in (een positief getal).\n";
} else {

    for ($i = 0; $i < $aantalActiviteiten; $i++) {
        echo "Voeg activiteit " . ($i + 1) . " toe: ";
        $activiteit = readline();
        $activiteiten[] = $activiteit;
    }

    echo "\nJe bucketlist:\n";
    foreach ($activiteiten as $index => $activiteit) {
        echo ($index + 1) . ". " . $activiteit . "\n";
    }
}
