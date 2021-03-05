<?php

/*************
 *    RAB
 *************/

namespace App\DataTransformer;

use App\Dto\OrderOutput;
use App\Entity\OrderClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use ApiPlatform\Core\DataTransformer\DataTransformerInterface;

class OrderOutputDataTransformer extends AbstractController implements DataTransformerInterface
{
    /**
     * @inheritDoc
     */
    public function transform($data, string $to, array $context = [])
    {
        // to select each user
        $output = new OrderOutput();
        $idOrder = $data->getId();
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQueryBuilder();
        $query->select('u.id,u.nameUser,u.dateOrder');
        $query->from(OrderClient::class, 'u');
        $query->andWhere('u.id =' . $idOrder);
        $qb = $query->getQuery();
        $result = $qb->getResult();

        // to keep in arrays user data
        $nameUser = [];
        $dateOrder = [];

        foreach ($result as $key => $value) {
            if (!in_array($value["nameUser"], $nameUser)) {
                array_push($nameUser, $value["nameUser"]);
            }
            if (!in_array($value["dateOrder"], $dateOrder)) {
                array_push($dateOrder, $value["dateOrder"]);
            }
        }

        // to respect HATEOAS rules
        $prefix = "http://127.0.0.1:8000/";
        $chaine = (string)$idOrder;
        $allOrders = ['rel' => 'all-orders', 'href' => $prefix . "api/order/"];
        $selfOrder = ['rel' => 'self', 'href' => $prefix . "api/order/" . $chaine];
        $links = array($allOrders, $selfOrder);


        $msg = [
            "id" => $idOrder,
            "name user" => $nameUser,
            "date order" => $dateOrder,
            "links" => $links,
        ];
        $output->setOrder($msg);

        return $output;
    }

    /**
     * @inheritDoc
     */
    public function supportsTransformation($data, string $to, array $context = []): bool
    {
        return OrderOutput::class === $to;
    }
}