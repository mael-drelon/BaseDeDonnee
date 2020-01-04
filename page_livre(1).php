<html>
<head></head>   
<body>
        <center>
            <h1><font color="red">les diffrents livres sur Mylivre</font></h1>
        </center>

<?php
class livre{

    private $_nom;
    private $_auteur;
    private $datedesortie;
    private $_ID;

public function __construct($IDlivre){
     try{
    //execution du code sur la BDD 
    $BDD = new PDO('mysql:host=192.168.65.232; dbname=livresdevoir; charset=utf8','root', '');
  
}
catch (Exception $erreur)
{
    echo 'Erreur : '.$erreur->getmessage();
}
    $this->_ID = $IDlivre;
}
public function getnom()
    {
        return $this->_nom;
    }   
    public function getauteur()
    {
        return $this->_auteur;
    }   
    public function getID()
    {
        return $this->_ID;
    }


public function Afficherlivre()
    {
    echo  '<p> le titre du livre est '.$this->_nom.' est a etait ecrit par '.$this->_auteur. '</p>';
    }
   
}           //fin de la class livre
?>
</body>
</html>