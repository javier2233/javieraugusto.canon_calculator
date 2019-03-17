<?php
/**
 * Created by PhpStorm.
 * User: javie
 * Date: 16/03/2019
 * Time: 10:51 PM
 */

namespace AppBundle\Product\Controller;

use AppBundle\Component\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CreateProductController extends Controller
{

    public function createAction($name,$price, $description)
    {

        $em = $this->getDoctrine()->getManager();
        $product = new Product();
        $product->setName($name);
        $product->setPrice($price);
        $product->setDescription($description);

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();

        return new Response('Saved new product with id '.$product->getId());

    }

}