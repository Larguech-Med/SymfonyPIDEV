<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanAlim
 *
 * @ORM\Table(name="plan_alim")
 * @ORM\Entity
 */
class PlanAlim
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
     * @ORM\Column(name="id_nut", type="integer", nullable=false)
     */
    private $idNut;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="id_regime", type="string", length=300, nullable=false)
     */
    private $idRegime;


}
