<?php

namespace App\Entity;


use App\Dto\OrderOutput;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Order
 *
 *  @ApiResource(
 *     
 *     itemOperations={
 *         "get"={"path"="order/{id}", "output"=OrderOutput::class},
 *         "put"={"path"="order/put/{id}", "output"=OrderOutput::class},
 *         "delete"={"path"="order/delete/{id}", "output"=OrderOutput::class}
 *     },
 *     collectionOperations={
 *            "get"={"path"="order", "output"=OrderOutput::class},
 *            "post"={"path"="order/post"}
 *     },
 *     formats={"json"}
 * )
 * 
 * @ORM\Table(name="order_client")
 * @ORM\Entity
 */
class OrderClient
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name_user", type="string", length=255, nullable=false)
     */
    private $nameUser;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_order", type="date", nullable=true)
     */
    private $dateOrder;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameUser(): ?string
    {
        return $this->nameUser;
    }

    public function setNameUser(string $nameUser): self
    {
        $this->nameUser = $nameUser;

        return $this;
    }

    public function getDateOrder(): ?\DateTimeInterface
    {
        return $this->dateOrder;
    }

    public function setDateOrder(?\DateTimeInterface $dateOrder): self
    {
        $this->dateOrder = $dateOrder;

        return $this;
    }


}
