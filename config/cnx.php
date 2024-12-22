<?php
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=avocatconnect','root','12345');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
    echo "erreur de cnx a la base de donnees".$e->getMessage();
}
?>