<?php

declare(strict_types=1);

namespace App\Model\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Review
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'integer')]
    private int $rating;

    #[ORM\Column(type: 'text')]
    private string $comment;

    #[ORM\ManyToOne(inversedBy: 'reviews')]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'reviews')]
    private ?VideoGame $videoGame = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRating(): int
    {
        return $this->rating;
    }

    public function setRating(int $rating): self
    {
        $this->rating = $rating;
        return $this;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getVideoGame(): ?VideoGame
    {
        return $this->videoGame;
    }

    public function setVideoGame(?VideoGame $videoGame): self
    {
        $this->videoGame = $videoGame;
        return $this;
    }
}
