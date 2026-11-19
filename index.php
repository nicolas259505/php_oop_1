<?php


// creazione classe

class Company{
public $name;
public $location;
public $tot_employes;
public $salary;
public $spese;



public function __construct($_name , $_location , $_tot_employes , $_salary)
{

$this->name = $_name;
$this->location = $_location;
$this->tot_employes = $_tot_employes;
$this->salary = $_salary;


}

// Creazione funzione per controllare che ci siano dipendenti e di conseguenza stampare un messaggio a schermo diverso

public function descr(){
if ($this->tot_employes != 0){
echo "L'Ufficio " . $this->name . "con sede in " . $this->location . " ha ben " . $this->tot_employes . " dipendenti  ed il loro stipendio medio è di " . $this->salary . "€ \n";
}else {
echo "L'Ufficio " . $this->name . "con sede in " . $this->location . " non ha dipendenti \n";
}
}

// creo la funzione che mi calcoli la spesa annua per ogni azienda, calcolando lo stipendio medio * 12 e poi moltiplicandolo per il numero di dipendenti
public function speseAnnue(){
// Inizializzo la variabile spese, che sarà uguale al calcolo descritto in precedenza
$spese = ($this->salary * 12 )  * $this->tot_employes;

echo "La spesa annuale di " . $this->name . " è di " . $spese . " € \n";
// Salvo il risutato nell'oggetto , mi servirà per calcolare il totale di tutte le aziende
$this->spese = $spese;
}

public static function totExpend($aziende){

$tot = 0;

foreach ($aziende as $azienda) {
    $tot += $azienda->spese;
}

echo "Il totale delle spese annue di tutte le aziende è " . $tot . " €\n";

}

}

$aulab = new Company("Aulab " , "Italia" , 50 , 1700 );
$past = new Company("Pastificio Grano d'Oro " , "Italia" , 0 , 0);
$apple = new Company("Apple Inc." , "USA" , 167000 , 2800);
$sinopec = new Company("Sinopec " , "China" , 845000 , 4800);
$pizza = new Company("La Fetta d'Oro ", "Italia" , 12 , 1200);



$aulab->descr();
$aulab->speseAnnue();

$past->descr();
$past->speseAnnue();

$apple->descr();
$apple->speseAnnue();

$sinopec->descr();
$sinopec->speseAnnue();

$pizza->descr();
$pizza->speseAnnue();



// Creo un array dove metto tutte le aziene, mi servirà per creare la funzione per calcolare il totale di tutte le aziende

$aziende = [$aulab , $past , $apple , $sinopec , $pizza];


// Richiamo la funzione statica

Company::totExpend($aziende);



