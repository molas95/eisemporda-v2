<?php
    $link = mysql_connect("localhost", "root", "") or die("<h2> No es troba el servidor</h2>");
    $db = mysql_select_db("formulari", $link) or die("<h2> Error de connexió</h2>");


    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $poblacio = $_POST['poblacio'];
    $assumpte = $_POST['assumpte'];
    $missatge = $_POST['missatge'];

    mysql_query("SET NAMES 'utf8'");

    if (!mysql_query("INSERT INTO usuaris VALUES ('$nom','$email','$poblacio','$assumpte','$missatge')", $link)) {
        header("Location: serveis.html#modal3");
        die;
    }

    header("Location: serveis.html#modal2");
    die;
?>