<?php

namespace App\Entity;

use App\Dto\OrderShowOutput;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
/**
 * OrderShow
 *
 *  * @ApiResource(
 *     
 *     itemOperations={
 *         "get"={"path"="ordershow/{id}", "output"=OrderShowOutput::class},
 *         "put"={"path"="ordershow/put/{id}", "output"=OrderShowOutput::class},
 *         "delete"={"path"="ordershow/delete/{id}", "output"=OrderShowOutput::class}
 *     },
 *     collectionOperations={
 *            "get"={"path"="ordershow", "output"=OrderShowOutput::class},
 *            "post"={"path"="ordershow/post"}
 *     },
 *     formats={"json"}
 * )
 * 
 * @ORM\Table(name="order_show")
 * @ORM\Entity
 */
class OrderShow
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
     * @var int
     *
     * @ORM\Column(name="id_order", type="integer", nullable=false)
     */
    private $idOrder;

    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false)
     */
    private $idProduct;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdOrder(): ?int
    {
        return $this->idOrder;
    }

    public function setIdOrder(int $idOrder): self
    {
        $this->idOrder = $idOrder;

        return $this;
    }

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    public function setIdProduct(int $idProduct): self
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }


}
