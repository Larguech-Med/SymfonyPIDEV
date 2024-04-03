<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recette
 *
 * @ORM\Table(name="recette")
 * @ORM\Entity
 */
class Recette
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
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=256, nullable=false)
     */
    private $nom;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=300, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="id_ingredients", type="string", length=256, nullable=false)
     */
    private $idIngredients;

    /**
     * @var string
     *
     * @ORM\Column(name="Quantite_Ingredients", type="string", length=256, nullable=false)
     */
    private $quantiteIngredients;

    /**
     * @var string
     *
     * @ORM\Column(name="id_nutrition", type="string", length=256, nullable=false)
     */
    private $idNutrition;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Etat", type="string", length=20, nullable=true)
     */
    private $etat;

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

    public function getIdUser(): int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): void
    {
        $this->idUser = $idUser;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getPrix(): float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): void
    {
        $this->prix = $prix;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getIdIngredients(): string
    {
        return $this->idIngredients;
    }

    public function setIdIngredients(string $idIngredients): void
    {
        $this->idIngredients = $idIngredients;
    }

    public function getQuantiteIngredients(): string
    {
        return $this->quantiteIngredients;
    }

    public function setQuantiteIngredients(string $quantiteIngredients): void
    {
        $this->quantiteIngredients = $quantiteIngredients;
    }

    public function getIdNutrition(): string
    {
        return $this->idNutrition;
    }

    public function setIdNutrition(string $idNutrition): void
    {
        $this->idNutrition = $idNutrition;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): void
    {
        $this->etat = $etat;
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
