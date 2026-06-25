<?php

declare(strict_types=1);

namespace App\Security\Voter;

use App\Model\Entity\User;
use App\Model\Entity\VideoGame;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

final class VideoGameVoter extends Voter
{
    public const REVIEW = 'review';

    protected function supports(string $attribute, $subject): bool
    {
        return $attribute === self::REVIEW && $subject instanceof VideoGame;
    }

    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();

        if (!$user instanceof User) {
            return false;
        }

        // Pour OC14 : tout utilisateur connecté peut poster un avis
        return true;
    }
}
