<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="..\css\contact.css"/>
        <title>Contact</title>
    </head>
    <body>
            <div class="menu">
        <ul>
            <li><a href="../index.php">Accueil</a></li>
            <li><a href="../php/Compétence.php">Compétences</a></li>
            <li><a href="../php/Formation.php">Formation</a></li>
            <li><a href="../php/Réalisations.php">Réalisation</a></li>
            <li><a href="../php/Contact.php">Contact</a></li>
        </ul>
    </div>
    </body>
    <link rel="index.html" href="C:\xampp\htdocs\portfolio\index.html"/>


    
</div>
<?php



     



require_once("..\yaml\yaml.php");
$data=yaml_parse_file('..\fichieryaml/Contact.yaml');

echo "<h2>Contact</h2>\n";
$contact=$data["contact"] ;
echo "<p>".ucfirst($contact["email"])."</p>\n";
echo "<p>".ucfirst($contact["numéro"])."</p>\n";
?>