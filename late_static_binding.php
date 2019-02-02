<?php
 Class DataB{
     protected static $tableName='baseTable';
     public function select(){
         echo "select * from ". static::$tableName .'<br>';
     }
 }
 class Abc extends DataB
 {
     protected static $tableName='abcTable';
 }

 class Def extends DataB
 {
     protected static $tableName='defTable';
 }
 
 $abcObj=new Abc;
 $defObj=new Def;
 $abcObj->select();
 $defObj->select();