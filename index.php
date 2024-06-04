<?php

/*
$name_9 = "Hariom" ; 
$number = 10 ; 
$percent = 10.15 ;


echo  $name_9;  echo '</br>';
echo $number; echo '</br>';
echo $percent;

//$$hindi = $number ; 

//echo $$hindi ; 
//////////////-Index Array ////////
/* -------------  Array Index array Example   -----------*/

$index_marks = array(80,90,99,71,80) ; 

/* echo '<pre>' ; 
print_r($index_marks); 
echo '</pre>' ; 

echo $index_marks[4];

/* -------------Associative array ------------------*/

/*$Associative_marks = array("Ram"=>"90","Harish"=>"99");

echo '<pre>' ; 
print_r($Associative_marks); 
echo '</pre>' ; 

echo $Associative_marks["Ram"];

/////*--------- Multidimensional Array --------------
//		1 2 3
//		4 5 6
//		7 8 9
//*/


/*$multi_array  = array(
						array("hc"=>"car","he"=>"bike","h"=>"cycle"),
						array("halicopter","rocket","aeroplane"),
						array("bajaj","Hero","yamaha"),
						);
						
	
echo '<pre>' ; 
print_r($multi_array); 
echo '</pre>' ; 

echo $multi_array[0][2] ;	

echo '</br>';
echo $multi_array[1][1];
echo '</br>';
echo $multi_array[2]["lastname"];


echo '</br>';

echo $marks["Ram"];


echo '</br>';

$condition = Null ;


//print
//print_r



*/




class bike {
	
    public $color ;
	public $name ;
	
	function setcolor($color2)
	{
		$this->color = $color2 ; 		
	}
	
	function setname($name)
	{
		$this->name = $name;
	}
	
	function getname()
	{
		echo $this->name ;
	}
	
	function getcolor()
	{
		echo $this->color ; 		
	}
		
}


$object1 = new bike();

$object1->setcolor("Red");

echo $object1->getcolor();
echo '<br>';

$object2 = new bike();
$object2->setname("hariom");
echo $object2->getname();






