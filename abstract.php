<?php 

abstract class Myclass{

    public abstract function msg();
}

class first extends Myclass{

    public function msg(){
        echo   "hello";
    }
}

$obj = new first();
$obj->msg();



?>