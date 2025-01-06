<?php
function lang($key) {
    static $translations = null;

    // Déterminer la langue (par défaut en français)
    $lang = $_SESSION['lang'] ?? 'fr';

    // Charger les traductions
    if ($translations === null) {
        $translations = include "lang/{$lang}.php";
    }

    // Retourner la traduction ou la clé brute si non trouvée
    return $translations[$key] ?? $key;
}
?>
