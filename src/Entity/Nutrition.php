<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nutrition
 *
 * @ORM\Table(name="nutrition")
 * @ORM\Entity
 */
class Nutrition
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
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="id_ingredient", type="integer", nullable=false)
     */
    private $idIngredient;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_recette", type="integer", nullable=true)
     */
    private $idRecette;

    /**
     * @var string
     *
     * @ORM\Column(name="calories", type="string", length=300, nullable=false)
     */
    private $calories;

    /**
     * @var string
     *
     * @ORM\Column(name="carbs", type="string", length=300, nullable=false)
     */
    private $carbs;

    /**
     * @var string
     *
     * @ORM\Column(name="fat", type="string", length=300, nullable=false)
     */
    private $fat;

    /**
     * @var string
     *
     * @ORM\Column(name="fiber", type="string", length=300, nullable=false)
     */
    private $fiber;

    /**
     * @var string
     *
     * @ORM\Column(name="protein", type="string", length=300, nullable=false)
     */
    private $protein;

    /**
     * @var string
     *
     * @ORM\Column(name="vitamines", type="string", length=1024, nullable=false)
     */
    private $vitamines;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=256, nullable=true)
     */
    private $image;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $userId): void
    {
        $this->userId = $userId;
    }

    public function getIdIngredient(): int
    {
        return $this->idIngredient;
    }

    public function setIdIngredient(int $idIngredient): void
    {
        $this->idIngredient = $idIngredient;
    }

    public function getIdRecette(): ?int
    {
        return $this->idRecette;
    }

    public function setIdRecette(?int $idRecette): void
    {
        $this->idRecette = $idRecette;
    }

    public function getCalories(): string
    {
        return $this->calories;
    }

    public function setCalories(string $calories): void
    {
        $this->calories = $calories;
    }

    public function getCarbs(): string
    {
        return $this->carbs;
    }

    public function setCarbs(string $carbs): void
    {
        $this->carbs = $carbs;
    }

    public function getFat(): string
    {
        return $this->fat;
    }

    public function setFat(string $fat): void
    {
        $this->fat = $fat;
    }

    public function getFiber(): string
    {
        return $this->fiber;
    }

    public function setFiber(string $fiber): void
    {
        $this->fiber = $fiber;
    }

    public function getProtein(): string
    {
        return $this->protein;
    }

    public function setProtein(string $protein): void
    {
        $this->protein = $protein;
    }

    public function getVitamines(): string
    {
        return $this->vitamines;
    }

    public function setVitamines(string $vitamines): void
    {
        $this->vitamines = $vitamines;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): void
    {
        $this->image = $image;
    }


}
