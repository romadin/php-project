<?php 
include_once 'auto.php';


class Lijst {
    private $autolijst = array();

    
    public function getautoLijst(){
        return $this->autolijst;
        
    }
    
    public function voegAutoToe($auto){
        $this->autolijst[] = $auto;
    }
    
}

?>