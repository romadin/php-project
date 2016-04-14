<?php 

class Auto {
    private $merk = "";
    private $type = "";
    private $prijs;
    private $image = "";
    
    function getAuto(){
        return array("merk" => $this->merk, 
                        "Type" => $this->type, 
                        "Prijs" => $this->prijs, 
                        "Image" => $this->image);
    }
    
    function __construct($n, $t, $p, $i){
        $this-> merk = $n;
        $this-> type = $t;
        $this-> prijs = $p;
        $this-> image = $i;
    }
    
    
    function setMerk($merk){
        $this->merk = $merk;
    }
    
    function setType($type){
        $this->type = $type;
    }
    
    function getMerk(){
        return $this->merk;
    }
    
    function getType(){
        return $this->type;
    }
    
    function setPrijs($prijs){
        $this->prijs = $prijs;
    }
    
    function getPrijs(){
        return $this->prijs;
        //return number_format((float)$this->prijs,  $decimals = 2 );
        
    }
    
    function setImage($image){
        $this->image = $image;
    }
    
    function getImage(){
        return $this->image;
    }
    
    
    
    
    
}


?>