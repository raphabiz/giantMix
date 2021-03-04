<?php

namespace App\Entity;

use App\Dto\UserOutput;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * User
 *
 * @ApiResource(
 *     
 *     itemOperations={
 *         "get"={"path"="user/{id}", "output"=UserOutput::class},
 *         "put"={"path"="user/put/{id}", "output"=UserOutput::class},
 *         "delete"={"path"="user/delete/{id}", "output"=UserOutput::class}
 *     },
 *     collectionOperations={
 *            "get"={"path"="user", "output"=UserOutput::class},
 *            "post"={"path"="user/post"}
 *     },
 *     formats={"json"}
 * )
 * 
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
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
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }


}
