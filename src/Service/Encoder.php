<?php

namespace App\Service;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class Encoder
{
    /**
     * @var EntityManagerInterface
     */
    public $manager;
    /**
     * @var UserPasswordEncoderInterface
     */
    public $encoder;

    public function __construct(EntityManagerInterface $manager,UserPasswordEncoderInterface $encoder)
    {
        $this->manager=$manager;
        $this->encoder=$encoder;
    }

    public function encoder(User $user): void
    {
        $hash=$this->encoder->encodePassword($user,$user->getPassword());
        $user->setPassword($hash);
        $this->manager->persist($user);
        $this->manager->flush();
    }

}