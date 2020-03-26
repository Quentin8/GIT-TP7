<?php
class formulaire
{
    protected $html = "";
    function __construct($fichier, $method)
    {
        $this->html .= "<form method='$method' action='$fichier'>";
    }
    function ajouterzonetexte(){
        $this->html .= " Votre nom : <input type='text'><br>";
    }
    function ajouterbouton(){
        $this->html .= "<button>Cliquez ici</button><br>";
    }
    function getform(){
        echo $this->html . "</form>";
    }
}

class form2 extends formulaire{
    function __construct($fichier, $method)
    {
        parent::__construct($fichier, $method);
    }
    function ajouterRadio($text){
        $this->html .= $text . "<input type='radio'><br>";
    }
    function ajouterCase($text){
        $this->html .= $text . "<input type='checkbox'><br>";
    }
}


$formulaire1 = new form2("test.php", "post");
$formulaire1->ajouterzonetexte();
$formulaire1->ajouterzonetexte();
$formulaire1->ajouterbouton();
$formulaire1->ajouterRadio("Homme");
$formulaire1->ajouterRadio("Homme");
$formulaire1->ajouterCase("Tennis");
$formulaire1->ajouterCase("Equitation");
$formulaire1->getform();
?>
