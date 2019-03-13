<?php

namespace AppBundle\Component;


class Calculator {

    
    public function sumar($num1, $num2){

        $sum = $num1 + $num2;
        return $sum;
    }

    function restar($firts, $second){
        //echo "algo";exit();
        $sum = (int)($firts - $second);
        return $sum;
    }

    function multicar($firts, $second){

        $multi  = (int)($firts * $second);
        return $multi;
    }

    function pow($base, $elevate){
        $pow  = pow($base , $elevate);
        return $pow;
    }

    function table($table){
        $table = "
           $table * 1 = ". $table * 1 . " <br>
           $table * 2 = ". $table * 2 . " <br>
           $table * 3 = ". $table * 3 . " <br>
           $table * 4 = ". $table * 4 . " <br>
           $table * 5 = ". $table * 5 . " <br>
           $table * 6 = ". $table * 6 . " <br>
           $table * 7 = ". $table * 7 . " <br>
           $table * 8 = ". $table * 8 . " <br>
           $table * 9 = ". $table * 9 . " <br>
           $table * 10 = ". $table * 10 . " ";
        return $table;
    }

    function division($firts, $second){

        try{
            $div  = (float)($firts / $second);

        }catch (Exception $e){
            $div  = $e->getMessage();
        }
        return $div;
    }

}