<?php

declare(strict_types=1);

namespace App\Doctrine\EntityListener;

use App\Model\Entity\User;
use Doctrine\ORM\Mapping\PrePersist;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

final readonly class UserListener
{
    public function __construct(private UserPasswordHasherInterface $passwordHasher)
    {
    }

    #[PrePersist]
    public function hashPassword(User $user): void
    {
<<<<<<< HEAD
        if ($user->getPlainPassword() === null) {
            return;
        }

=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $user->setPassword(
            $this->passwordHasher->hashPassword(
                $user,
                $user->getPlainPassword()
            )
        );
    }
}
