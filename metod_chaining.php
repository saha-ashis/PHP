<?php
Class ABC{
    public function fun1(){
        echo 'This is from function one.<br>';
        return $this;
    }
    public function fun2(){
        echo 'This is from function two.<br>';
        return $this;
    }
    public function fun3(){
        echo 'This is from function three.<br>';
        return $this;
    }
    public function fun4(){
        echo 'This is from function four';
    }
}
$abcObj= new ABC();
$abcObj->fun1()->fun2()->fun3()->fun4();
?>