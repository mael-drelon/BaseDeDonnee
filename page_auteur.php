<html>
<head></head>   
<body>
        <center>
            <h1><font color="red"> Les Auteurs</font></h1>
        </center>

<ul>          <!-- debut du menus-->

    <li><a href="">Page des livres </a></li>
    <li><a href="">Page des commentaires </a></li>
    <li style="float:right"><a class="active" href="">retour acceuil</a></li>

</ul>            <!-- fin du menus -->

<?php
class Auteur{

    private $_nom;
    private $_ID;

public function __construct($IDauteur){
     try{
    //execution du code sur la BDD 
    $BDD = new PDO('mysql:host=192.168.65.232; dbname=livresdevoir; charset=utf8','root', '');
  
}
catch (Exception $erreur)
{
    echo 'Erreur : '.$erreur->getmessage();
}
    $this->_ID = $IDauteur;
}
public function getnom()
    {
        return $this->_nom;
    }     
    public function getID()
    {
        return $this->_ID;
    }

public function AfficherAuteur()
    {
    echo  '<p> le titre du livre est '.$this->_auteur.'  a ecrit  '.$this->_livre. '</p>';
    }
   
}           //fin de la class auteur
?>
</body>
</html>