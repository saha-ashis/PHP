<?php
/**
 * Traits Presedence
 * Self Class
 * Trait
 * Parent Class
 * Here in the B Class it first search the test1() function and 
 * if it is not there then it will search in the Trait and then in the Parent Class.
 */

Class A{
    public function test1(){
        echo 'This Test1 is from the Class A';
    }
}

trait Test{
    public function test1(){
        echo 'This Test1 is from the Trait Test';
    }
}

Class B extends A{
    use Test;
    public function test1(){
        echo 'This Test1 is from the Class B';
    }
}

$obj=new B;
$obj->test1();

?>
