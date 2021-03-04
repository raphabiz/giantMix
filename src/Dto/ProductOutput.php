<?php

/*************
 *    RAB
 *************/

namespace App\Dto;

use Doctrine\ORM\Mapping as ORM;

final class ProductOutput
{
    /**
     * @ORM\Column(type="json")
     */
    public $product;

    public function getProduct(): ?array
    {
        return $this->product;
    }

    public function setProduct(array $product): self
    {
        $this->product = $product;

        return $this;
    }
}