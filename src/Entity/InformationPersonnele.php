<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InformationPersonnele
 *
 * @ORM\Table(name="information_personnele")
 * @ORM\Entity
 */
class InformationPersonnele
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
     * @ORM\Column(name="prenom", type="string", length=300, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=300, nullable=false)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="taille", type="string", length=300, nullable=false)
     */
    private $taille;

    /**
     * @var string
     *
     * @ORM\Column(name="poids", type="string", length=300, nullable=false)
     */
    private $poids;

    /**
     * @var string
     *
     * @ORM\Column(name="maladie", type="string", length=300, nullable=false)
     */
    private $maladie;

    /**
     * @var string
     *
     * @ORM\Column(name="num_tel", type="string", length=300, nullable=false)
     */
    private $numTel;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=300, nullable=false)
     */
    private $adresse;


}
