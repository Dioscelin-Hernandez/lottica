<?php
session_start();

// Recuperar la variable de JavaScript
$variableJS = $_POST['variableJS'];

// Guardar la variable en la sesión de PHP
$_SESSION['id'] = $variableJS;

?>