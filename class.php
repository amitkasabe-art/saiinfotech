<!-- object orientd programming system -->
<!-- procedural language / object oriented -->
<!-- classes in php  -->
<?php
 /*
 class - class is something in which we can define which features are there we are hoing to use in our program to used by many objects
 object - object are real time entities in the program which used properties defined in the class which uses properties defined by class but can change properties values

properties - kind of variables
methods - type of operation that we are going to use in the program
or the operation that we are going to write in this and it is callable
 */
// let's start
// syntax
/* 
Sytax - 
class ClassName{

}
...............
additionals
class className{
    variables;
    methods(){ ---------------------->METHOD
        properties;
        if we want to access above variables 
        we can use 
        $this->variable;

    }
    CREATING OBJECT
    object = new className 
    $objet->variable = value;
    echo $variable->method_name();

}
*/
// example
class calculation{
    public $a , $b , $c;
    function sum()
    {
        $this->c = $this->a+$this->b;
        return $this->c;
    }
    function sub()
    {
        $this->c = $this->a-$this->b;
        return $this->c;
    }
}
$add = new calculation();
$add->a = 20;
$add->b = 20;
echo $add->sum() . "\n";
$sub = new calculation();
$sub->a = 20;
$sub->b = 10;
echo $sub->sub() , "\n";
?>