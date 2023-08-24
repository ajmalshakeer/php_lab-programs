<?php
class Square{
    public $length=0;

    public function getperi(){
        return(4*$this->length);
    }
    public function getarea(){
        return($this->length * $this->length);
    }
}
?>