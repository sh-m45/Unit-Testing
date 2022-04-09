<?php 
namespace App ;

class test{
    function Factorial($value){
    if($value >= 0 && is_int($value)){
        $fact = 1 ;
        for( $i = 1 ; $i <= $value ; $i++){
            $fact = $fact * $i ;
        }
        return $fact ;
    }
    else{
        return null ;
    }
        
    }
}





