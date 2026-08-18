<?php

declare(strict_types=1);

namespace App\Model\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Security\Core\User\UserInterface;

#[Entity]
class Review
{
    #[Id]
    #[GeneratedValue]
    #[Column]
    private ?int $id = null;

    #[ManyToOne(targetEntity: VideoGame::class, inversedBy: 'reviews')]
    #[JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private VideoGame $videoGame;

    #[ManyToOne(targetEntity: User::class)]
    #[JoinColumn(nullable: false)]
    private User $user;

    #[Range(min: 1, max: 5)]
    #[Column]
    private int $note;

    #[Column(type: Types::TEXT, nullable: true)]
    private ?string $comment = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVideoGame(): VideoGame
    {
        return $this->videoGame;
    }

    public function setVideoGame(VideoGame $videoGame): self
    {
        $this->videoGame = $videoGame;
        return $this;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(UserInterface $user): self
    {
        if (!$user instanceof User) {
            throw new \InvalidArgumentException('Expected instance of User.');
        }

        $this->user = $user;
        return $this;
    }

    public function getNote(): int
    {
        return $this->note;
    }

    public function setNote(int $note): self
    {
        $this->note = $note;
        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }
}
