<?php

namespace App\Entity;

use App\Dto\ProductOutput;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Product
 *
 * @ApiResource(
 *     
 *     itemOperations={
 *         "get"={"path"="product/{id}", "output"=ProductOutput::class},
 *         "put"={"path"="product/put/{id}", "output"=ProductOutput::class},
 *         "delete"={"path"="product/delete/{id}", "output"=ProductOutput::class}
 *     },
 *     collectionOperations={
 *            "get"={"path"="product", "output"=ProductOutput::class},
 *            "post"={"path"="product/post"}
 *     },
 *     formats={"json"}
 * )
 * @ORM\Table(name="product")
 * @ORM\Entity
 */
class Product
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduct;

    /**
     * @var string
     *
     * @ORM\Column(name="name_product", type="string", length=255, nullable=false)
     */
    private $nameProduct;

    /**
     * @var int|null
     *
     * @ORM\Column(name="price", type="integer", nullable=true)
     */
    private $price;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * Product constructor.
     * @param int $idProduct
     * @param string $nameProduct
     * @param int|null $price
     * @param string|null $description
     */
    public function __construct(int $idProduct, string $nameProduct, ?int $price, ?string $description)
    {
        $this->idProduct = $idProduct;
        $this->nameProduct = $nameProduct;
        $this->price = $price;
        $this->description = $description;
    }

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    public function getNameProduct(): ?string
    {
        return $this->nameProduct;
    }

    public function setNameProduct(string $nameProduct): self
    {
        $this->nameProduct = $nameProduct;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(?int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }


}
