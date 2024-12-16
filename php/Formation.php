<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="..\css\formation.css"/>
        <title>Formation</title>
    </head>
    <body>
            <div class="menu">
        <ul>
            <li><a href="../index.php">Accueil</a></li>
            <li><a href="..\php/Compétence.php">Compétences</a></li>
            <li><a href="..\php/Formation.php">Formation</a></li>
            <li><a href="..\php/Réalisations.php">Réalisation</a></li>
            <li><a href="..\php/Contact.php">Contact</a></li>
        </ul>
    </div>
    </body>
    <link rel="index.html" href="C:\xampp\htdocs\portfolio\index.html"/>
    <img src="assets\logo_files\0141178Elogo-caensup.jpg" alt="">
</html>

<?php

require_once("..\yaml\yaml.php");
$data=yaml_parse_file('..\fichieryaml/Formation.yaml');

echo "<h2>Formations</h2>\n";
$Formations=$data["Formations"] ;
echo "<p>".ucfirst($Formations["Etudes"])."</p>\n";
echo "<p>".ucfirst($Formations["etude1"])."</p>\n";
echo "<p>".ucfirst($Formations["etude2"])."</p>\n";

?>