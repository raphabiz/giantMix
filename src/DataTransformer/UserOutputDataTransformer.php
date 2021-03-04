<?php

/*************
 *    RAB
 *************/

namespace App\DataTransformer;

use App\Dto\UserOutput;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use ApiPlatform\Core\DataTransformer\DataTransformerInterface;

class UserOutputDataTransformer extends AbstractController implements DataTransformerInterface
{
    /**
     * @inheritDoc
     */
    public function transform($data, string $to, array $context = [])
    {
        // to select each user
        $output = new UserOutput();
        $idUser = $data->getId();
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQueryBuilder();
        $query->select('u.id,u.email,u.name,u.password');
        $query->from(User::class, 'u');
        $query->andWhere('u.id =' . $idUser);
        $qb = $query->getQuery();
        $result = $qb->getResult();

        // to keep in arrays user data
        $name = [];
        $password = [];
        $email = [];

        foreach ($result as $key => $value) {
            if (!in_array($value["name"], $name)) {
                array_push($name, $value["name"]);
            }
            if (!in_array($value["password"], $password)) {
                array_push($password, $value["password"]);
            }
            if (!in_array($value["email"], $email)) {
                array_push($email, $value["email"]);
            }
        }

        // to respect HATEOAS rules
        $prefix = "http://127.0.0.1:8000/";
        $chaine = (string)$idUser;
        $allUsers = ['rel' => 'all-users', 'href' => $prefix . "api/user/"];
        $selfUser = ['rel' => 'self', 'href' => $prefix . "api/user/" . $chaine];
        $links = array($allUsers, $selfUser);


        $msg = [
            "id" => $idUser,
            "name" => $name,
            "password" => $password,
            "email" => $email,
            "links" => $links,
        ];
        $output->setUser($msg);

        return $output;
    }

    /**
     * @inheritDoc
     */
    public function supportsTransformation($data, string $to, array $context = []): bool
    {
        return UserOutput::class === $to;
    }
}