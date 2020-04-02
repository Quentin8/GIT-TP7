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
<hr>
<h2>Exercice 2</h2>
<h3>Question 1</h3>
<?php
    abstract class Shape{
       abstract function getArea();

    }
    class Square extends Shape{
        private $width;
        private $height;
        function __construct($width, $height)
        {
            $this->width = $width;
            $this->height= $height;
        }

        function getArea()
        {
            return $this->width * $this->height . "<br>";
        }
    }
    class Circle extends Shape{
        private $radius;
        function __construct($r)
        {
            $this->radius = $r;
        }

        function getArea()
        {
            return 2*3.14*$this->radius . "<br>";
        }

    }
    $carre = new Square(5,5);
    $cercle = new Circle(4);
    $table = [$carre,$cercle];
    foreach ($table as $case){
        echo get_class($case) . " Area : " . $case->getArea();#get_class(objet) renvoit le nom de la classe
    }
?>
<hr>
<h2>Exercice 3</h2>
<?php
    Trait Un{
        function small($texte){
            echo "<small>$texte</small>";
        }
        function big($texte){
            echo "<h4>$texte</h4>";
        }
    }
    Trait DEUX{
        function small($texte){
            echo "<i>$texte</i>";
        }
        function big($texte){
            echo "<h2>$texte</h2>";
        }
    }
    class Texte{
        use DEUX, Un{
            DEUX::small insteadof Un;
            Un::big insteadof DEUX;
            DEUX::big as gros;
            Un::small as petit;
        }
    }
    $test = new Texte();
    $test->small("bonjour");
    $test->big("je");
    $test->petit("suis");
    $test->gros("Quentin");
?>