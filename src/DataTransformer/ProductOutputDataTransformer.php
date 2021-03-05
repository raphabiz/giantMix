<?php

/*************
 *    RAB
 *************/

namespace App\DataTransformer;

use App\Dto\ProductOutput;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use ApiPlatform\Core\DataTransformer\DataTransformerInterface;

class ProductOutputDataTransformer extends AbstractController implements DataTransformerInterface
{
    /**
     * @inheritDoc
     */
    public function transform($data, string $to, array $context = [])
    {
        // to select each user
        $output = new ProductOutput();
        $idProduct = $data->getIdProduct();
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQueryBuilder();
        $query->select('p.idProduct,p.nameProduct,p.price,p.description');
        $query->from(Product::class, 'p');
        $query->andWhere('p.idProduct =' . $idProduct);
        $qb = $query->getQuery();
        $result = $qb->getResult();

        // to keep in arrays user data
        $name = [];
        $price = [];
        $description = [];

        foreach ($result as $key => $value) {
            if (!in_array($value["nameProduct"], $name)) {
                array_push($name, $value["nameProduct"]);
            }
            if (!in_array($value["price"], $price)) {
                array_push($price, $value["price"]);
            }
            if (!in_array($value["description"], $description)) {
                array_push($description, $value["description"]);
            }
        }

        // to respect HATEOAS rules
        $prefix = "http://127.0.0.1:8000/";
        $chaine = (string)$idProduct;
        $allProducts = ['rel' => 'all-products', 'href' => $prefix . "api/product/"];
        $selfProduct = ['rel' => 'self', 'href' => $prefix . "api/product/" . $chaine];
        $links = array($allProducts, $selfProduct);


        $msg = [
            "id" => $idProduct,
            "name" => $name,
            "price" => $price,
            "description" => $description,
            "links" => $links,
        ];
        $output->setProduct($msg);

        return $output;
    }

    /**
     * @inheritDoc
     */
    public function supportsTransformation($data, string $to, array $context = []): bool
    {
        return ProductOutput::class === $to;
    }
}