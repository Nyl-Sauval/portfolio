<?php
session_start();

if (isset($_POST['lang']) && in_array($_POST['lang'], ['fr', 'en'])) {
    $_SESSION['lang'] = $_POST['lang'];
}

// Redirection vers la page précédente
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
?>
