<?php
/**
 * Created by PhpStorm.
 * User: javie
 * Date: 12/03/2019
 * Time: 8:56 PM
 */

namespace AppBundle\Controller;


use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class CalculatorController
{
    function sumAction($firts, $second){
    //echo "algo";exit();
        $sum = (int)($firts + $second);
        return new Response("<h1>$firts + $second = $sum</h1>");
    }

    function restAction($firts, $second){
        //echo "algo";exit();
        $sum = (int)($firts - $second);
        return new Response("<h1>$firts - $second = $sum</h1>");
    }

    function multiAction(){
        $request = Request::createFromGlobals();

        $firts = $request->request->get('firts');
        $second = $request->request->get('second');

        $multi  = (int)($firts * $second);
        return new Response("<h1>$firts * $second = $multi</h1>");
    }

    function powAction($base, $elevate){
        $pow  = pow($base , $elevate);
        return new Response("<h1>$base ^ $elevate = $pow</h1>");
    }

    function tableAction($table){
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
        return new Response("<h1>$table</h1>");
    }

    function divAction(){
        $request = Request::createFromGlobals();

        $firts = $request->query->get('firts');
        $second = $request->query->get('second');

        try{
            $div  = (float)($firts / $second);

        }catch (Exception $e){
            $div  = $e->getMessage();
        }
        return new Response("<h1>$firts / $second = $div</h1>");
    }
}