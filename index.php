<?php
// Using fully featured OOP code with version control
// Let's try to build a country system using php
class Country {
    private $name ; 
    private $population ; 
    private $size ; 
    private $continent ; 
    private $region ; 
    private $capital ; 
    private $colonial_thieves ;
    private $year_of_independence ; 

    public function __construct($object_parameters) {
        $this->name = $object_parameters['name'] ;
        $this->population = $object_parameters['population'] ; 
        $this->size = $object_parameters['size'] ; 
        $this->continent = $object_parameters['continent'] ; 
        $this->region = $object_parameters['region'] ; 
        $this->capital = $object_parameters['capital'] ; 
        $this->colonial_thieves = $object_parameters['colonial'] ; 
        $this->year_of_indepence = $object_parameters['independence'] ; 
    }
    public function get_economy() {
        //Introduce exception handling here
        if (($this->population/$this->size) < 200){
            echo('Bad economy') ; 
        }else {
            echo('Good economy') ; 
        }
   }
        
}
$country = array(
    'name' => 'Nigeria' ,
    'population' => 20000000 , 
    'size' => 30000 ,
    'continent' => 'Africa' , 
    'region' => 'West' ,
    'capital' => 'Nigeria' , 
    'colonial' => 'England' , 
    'independence' => 1960
) ; 
$nigeria = new Country($country) ; 
$nigeria->get_economy() ; 
?>