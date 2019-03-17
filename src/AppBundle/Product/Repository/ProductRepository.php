<?php
namespace AppBundle\Product\Repository;
use AppBundle\Component\Entity\Product;
use Doctrine\ORM\EntityRepository;
use AppBundle\Component\Repository\ProductRepository  AS interfaceProduct;

/**
 * Created by PhpStorm.
 * User: javie
 * Date: 16/03/2019
 * Time: 10:52 PM
 */


class ProductRepository extends EntityRepository implements interfaceProduct
{

    public function createProduct(Product $product){

        $entityManager = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return $product;

    }
    public function listProduct()
    {
        // TODO: Implement listProduct() method.
    }
}