
<!DOCTYPE html>                                        
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">                              

<head>
<title>My first page in PHP.</title>
</head>
<body>


<?php
$connect = mysql_connect('localhost','root','') or die ("erreur de connexion");
mysql_select_db('helperlist',$connect) or die ("erreur de connexion base");


$requete1 = mysql_query('SELECT *  FROM   helperlist'); 
mysql_close();

 while($resultat = mysql_fetch_object($requete1))
     {
          echo '<p>Titre : '.$resultat->titre.'. Texte : '.$resultat->texte.'</p>';
     } 

?>

Current date : <?php print(date("l F d, Y")); ?>

</body>
</html> 





