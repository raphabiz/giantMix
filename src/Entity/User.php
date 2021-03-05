<?php

namespace App\Entity;

use App\Dto\UserOutput;
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 *  * @ApiResource(
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
 * @ORM\Entity(repositoryClass=UserRepository::class)
 *  * @UniqueEntity(
 *     fields={"email"},
 *      message="Déja utilisé"
 * )
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;
     /**
     * @Assert\EqualTo(propertyPath="password",message="Votre mot de passe doit être identique à sa confirmation")
     */
    public $confirm_password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->id;
    }

    /**
     * @see UserInterface
     */
    public function getRoles()
    {
        return ['ROLE_USER'];
    }


    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
