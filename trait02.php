<?php
/**
 * Conflict Resolution in Traits 
 */

 Trait Man{
     public function walk(){
         echo "Walks in Two legs";
     }
 }

 Trait Dog{
     public function walk(){
         echo "Walks in four legs";
     }
 }

 Class BothWalk{
     use Man,Dog{
         Man::walk insteadof Dog;
         Dog::walk as Dogwalk;
     }
 }

 $obj=new BothWalk;
 $obj->walk(); // It Prints walks in Two Legs
$obj->Dogwalk(); // It Prints walks in Four Legs


