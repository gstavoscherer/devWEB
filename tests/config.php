<?php
function conectarBase(){
    $host = "localhost";
    $dbname = "formulario-gustavo";
    $user = "root"; // Replace with your actual database username
    $password = ""; // Replace with your actual database password
    
    $connStr = "mysql:host=$host;dbname=$dbname";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    
    try {
        // Create the connection
        $conn = new PDO($connStr, $user, $password, $options);
        return $conn;
    } catch (PDOException $e) {
        echo "Falha ao conectar: " . $e->getMessage();
    }
}
