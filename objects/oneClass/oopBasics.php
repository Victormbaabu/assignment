<?php
class Fruit{
private $name;
  //@TODO :Create a constructor
  //@TODO :takes one parameter called names
   public function __construct($name){
     $this->name = $name;
   }
     //Getter
     public function getName(){
       return $this->name;
     }
     /*public function trial (){
       return self ::name;*/

     //settlers
     public function setName($name){
       $this->name =$name;

     }
     public function grow(){
       //procedure for growth

     }
   }
  // @TODO: Create a banana
  $banana=new fruit('banana');
    echo "My banana is awesome ".$banana->getName();
    //internal workings are not your concern
    //but how it works matter
    $banana ->grow();

 ?>
