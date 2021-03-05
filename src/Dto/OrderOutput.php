<?php

/*************
 *    RAB
 *************/

namespace App\Dto;

use Doctrine\ORM\Mapping as ORM;

final class OrderOutput
{
    /**
     * @ORM\Column(type="json")
     */
    public $order;

    public function getOrder(): ?array
    {
        return $this->order;
    }

    public function setOrder(array $order): self
    {
        $this->order= $order;

        return $this;
    }
}