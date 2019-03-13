<?php
/**
 * Created by PhpStorm.
 * User: javie
 * Date: 12/03/2019
 * Time: 8:56 PM
 */


namespace AppBundle\Controller;



use AppBundle\Component\Calculator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Config\Definition\Exception\Exception;



class CalculatorController
{
    private  $calculator; 

    function sumAction($firts, $second){
    //echo "algo";exit();
        $calculator = new Calculator();
        $sum = $calculator->sumar($firts, $second);
        return new Response("<h1>$firts + $second = $sum</h1>");
    }

    function restAction($firts, $second){
        //echo "algo";exit();
        $calculator = new Calculator();
        $sum = $calculator->restar($firts, $second);
        return new Response("<h1>$firts - $second = $sum</h1>");
    }

    function multiAction(){

        $calculator = new Calculator();
        $request = Request::createFromGlobals();

        $firts = $request->request->get('firts');
        $second = $request->request->get('second');

        $multi  = $calculator->multicar($firts, $second);
        return new Response("<h1>$firts * $second = $multi</h1>");
    }

    function powAction($base, $elevate){
        $pow  = pow($base , $elevate);
        return new Response("<h1>$base ^ $elevate = $pow</h1>");
    }

    function tableAction($table){
        $calculator = new Calculator();
        return new Response("<h1>". $calculator->table($table). "</h1>");
    }

    function divAction(){

        $calculator = new Calculator();
        $request = Request::createFromGlobals();

        $firts = $request->query->get('firts');
        $second = $request->query->get('second');

        $div  = $calculator->division($firts, $second);
        return new Response("<h1>$firts / $second = $div</h1>");
    }
}