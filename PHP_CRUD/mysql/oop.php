<?php
class car 
{
   public $wheels = 4;
   protected $hood =1;
   private $engine = 2;
   var $door =5;
  

   
 }
$bmw = new car();
$falgun = new bus();
class bus extends car{
    function showproperty()
    {
        echo $this->engine; 
}
}

echo $falgun->showproperty();

?>