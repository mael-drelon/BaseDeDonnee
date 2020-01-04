<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="">
</head>
<body>
<div class="titre"> 
        <center>
            <h1><font color="red">bienvenue sur la page commentaire</font></h1>
        </center>
<ul>
<!-- debut du menus-->
        <li><a href="/ProhetBTS/web_cleme/langlace/applis/page_livre.php">Page des livres </a></li>
        <li style="float:right"><a class="active" href="/applis/applis.php">retour acceuil</a></li>
</ul>
<!-- fin du menus -->

<input type="text" zone de commentaire>


<?php
class commentaire{

    private $_pseudo;
    private $_ID;

public function __construct($IDcommentaire){
     try{
    //execution du code sur la BDD 
    $BDD = new PDO('mysql:host=192.168.65.232; dbname=livresdevoir; charset=utf8','root', '');
  
}
catch (Exception $erreur)
{
    echo 'Erreur : '.$erreur->getmessage();
}
    $this->_ID = $IDcommentaire;
}
public function getnom()
    {
        return $this->_pseudo;
    }     
    public function getID()
    {
        return $this->_ID;
    }

public function AfficherCommentaire()
    {
    echo  '<p> le commentaire a etait ecrit par  '.$this->_pseudo.'</p>';
    }
   
}           //fin de la class commentaire
?>
</body>
</html>