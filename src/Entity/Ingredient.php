<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredient
 *
 * @ORM\Table(name="ingredient")
 * @ORM\Entity
 */
class Ingredient
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
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=300, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="qte", type="string", length=300, nullable=false)
     */
    private $qte;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_vente", type="string", length=300, nullable=false)
     */
    private $prixVente;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_achat", type="string", length=300, nullable=false)
     */
    private $prixAchat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_nutrition", type="integer", nullable=true)
     */
    private $idNutrition;

    /**
     * @var string
     *
     * @ORM\Column(name="Etat", type="string", length=20, nullable=false)
     */
    private $etat;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite_threshold", type="integer", nullable=false)
     */
    private $quantiteThreshold;

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

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getQte(): string
    {
        return $this->qte;
    }

    public function setQte(string $qte): void
    {
        $this->qte = $qte;
    }

    public function getPrixVente(): string
    {
        return $this->prixVente;
    }

    public function setPrixVente(string $prixVente): void
    {
        $this->prixVente = $prixVente;
    }

    public function getPrixAchat(): string
    {
        return $this->prixAchat;
    }

    public function setPrixAchat(string $prixAchat): void
    {
        $this->prixAchat = $prixAchat;
    }

    public function getIdNutrition(): ?int
    {
        return $this->idNutrition;
    }

    public function setIdNutrition(?int $idNutrition): void
    {
        $this->idNutrition = $idNutrition;
    }

    public function getEtat(): string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): void
    {
        $this->etat = $etat;
    }

    public function getQuantiteThreshold(): int
    {
        return $this->quantiteThreshold;
    }

    public function setQuantiteThreshold(int $quantiteThreshold): void
    {
        $this->quantiteThreshold = $quantiteThreshold;
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
