<?php

/*************
 *    RAB
 *************/

namespace App\DataTransformer;

use App\Dto\OrderShowOutput;
use App\Entity\OrderShow;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use ApiPlatform\Core\DataTransformer\DataTransformerInterface;

class OrderShowOutputDataTransformer extends AbstractController implements DataTransformerInterface
{
    /**
     * @inheritDoc
     */
    public function transform($data, string $to, array $context = [])
    {
        // to select each user
        $output = new OrderShowOutput();
        $id = $data->getId();
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQueryBuilder();
        $query->select('o.id,o.idOrder,o.idProduct,o.quantity');
        $query->from(OrderShow::class, 'o');
        $query->andWhere('o.id =' . $id);
        $qb = $query->getQuery();
        $result = $qb->getResult();

        // to keep in arrays user data
        $idOrder = [];
        $idProduct = [];
        $quantity = [];

        foreach ($result as $key => $value) {
            if (!in_array($value["idOrder"], $idOrder)) {
                array_push($idOrder, $value["idOrder"]);
            }
            if (!in_array($value["idProduct"], $idProduct)) {
                array_push($idProduct, $value["idProduct"]);
            }
            if (!in_array($value["quantity"], $quantity)) {
                array_push($quantity, $value["quantity"]);
            }
        }

        // to respect HATEOAS rules
        $prefix = "http://127.0.0.1:8000/";
        $chaine = (string)$id;
        $allOrderShow = ['rel' => 'all-ordershow', 'href' => $prefix . "api/ordershow/"];
        $selfOrder = ['rel' => 'self', 'href' => $prefix . "api/ordershow/" . $chaine];
        $links = array($allOrderShow, $selfOrder);


        $msg = [
            "id" => $id,
            "id Order" => $idOrder,
            "id Product" => $idProduct,
            "quantity" => $quantity,
            "links" => $links,
        ];
        $output->setOrderShow($msg);

        return $output;
    }

    /**
     * @inheritDoc
     */
    public function supportsTransformation($data, string $to, array $context = []): bool
    {
        return OrderShowOutput::class === $to;
    }
}