<?php

/*************
 *    RAB
 *************/

namespace App\Dto;

use Doctrine\ORM\Mapping as ORM;

final class OrderShowOutput
{
    /**
     * @ORM\Column(type="json")
     */
    public $ordershow;

    public function getOrderShow(): ?array
    {
        return $this->order;
    }

    public function setOrderShow(array $ordershow): self
    {
        $this->order= $ordershow;

        return $this;
    }
}