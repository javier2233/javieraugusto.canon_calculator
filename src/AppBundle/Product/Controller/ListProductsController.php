<?php
/**
 * Created by PhpStorm.
 * User: javie
 * Date: 16/03/2019
 * Time: 11:04 PM
 */

namespace AppBundle\Product\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class ListProductsController extends Controller
{

    public function listAction()
    {
        $products = $this->getDoctrine()->getRepository('\AppBundle\Component\Entity\Product')->findAll();

        return new JsonResponse($products);
    }
}