<?php 

namespace app\models;

use DateTimeImmutable;

class Player {

    private int $id;
    private string $name;
    private string $birthDate;
    private ?string $nationality;
    private ?float $height;
    private ?float $weight;
    private ?string $dominantFoot;
    private ?string $position;
    private ?string $team;
    private ?string $image;
    private DateTimeImmutable $createdAt;

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of birthDate
     */
    public function getBirthDate(): string
    {
        return $this->birthDate;
    }

    /**
     * Set the value of birthDate
     */
    public function setBirthDate(string $birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get the value of nationality
     */
    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    /**
     * Set the value of nationality
     */
    public function setNationality(?string $nationality): self
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get the value of height
     */
    public function getHeight(): ?float
    {
        return $this->height;
    }

    /**
     * Set the value of height
     */
    public function setHeight(?float $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get the value of weight
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     */
    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get the value of dominantFoot
     */
    public function getDominantFoot(): ?string
    {
        return $this->dominantFoot;
    }

    /**
     * Set the value of dominantFoot
     */
    public function setDominantFoot(?string $dominantFoot): self
    {
        $this->dominantFoot = $dominantFoot;

        return $this;
    }

    /**
     * Get the value of position
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }

    /**
     * Set the value of position
     */
    public function setPosition(?string $position): self
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get the value of team
     */
    public function getTeam(): ?string
    {
        return $this->team;
    }

    /**
     * Set the value of team
     */
    public function setTeam(?string $team): self
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * Set the value of image
     */
    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of created_at
     */
    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }

    /**
     * Set the value of created_at
     */
    public function setCreatedAt(DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}