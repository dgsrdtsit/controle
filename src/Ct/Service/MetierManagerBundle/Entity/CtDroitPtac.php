<?php

namespace Ct\Service\MetierManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtDroitPtac
 *
 * @ORM\Table(name="ct_droit_ptac")
 * @ORM\Entity
 */
class CtDroitPtac
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="dp_prix_min", type="float", precision=10, scale=0, nullable=true)
     */
    private $dpPrixMin;

    /**
     * @var float
     *
     * @ORM\Column(name="dp_prix_max", type="float", precision=10, scale=0, nullable=true)
     */
    private $dpPrixMax;

    /**
     * @var float
     *
     * @ORM\Column(name="dp_droit", type="float", precision=10, scale=0, nullable=true)
     */
    private $dpDroit;

    /**
     * @var CtGenreCategorie
     *
     * @ORM\ManyToOne(targetEntity="CtGenreCategorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ct_genre_categorie_id", referencedColumnName="id")
     * })
     */
    private $ctGenreCategorie;

    /**
     * @var CtTypeDroitPtac
     *
     * @ORM\ManyToOne(targetEntity="CtTypeDroitPtac")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ct_type_droit_ptac_id", referencedColumnName="id")
     * })
     */
    private $ctTypeDroitPtac;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dpPrixMin
     *
     * @param float $dpPrixMin
     *
     * @return CtDroitPtac
     */
    public function setDpPrixMin($dpPrixMin)
    {
        $this->dpPrixMin = $dpPrixMin;

        return $this;
    }

    /**
     * Get dpPrixMin
     *
     * @return float
     */
    public function getDpPrixMin()
    {
        return $this->dpPrixMin;
    }

    /**
     * Set dpPrixMax
     *
     * @param float $dpPrixMax
     *
     * @return CtDroitPtac
     */
    public function setDpPrixMax($dpPrixMax)
    {
        $this->dpPrixMax = $dpPrixMax;

        return $this;
    }

    /**
     * Get dpPrixMax
     *
     * @return float
     */
    public function getDpPrixMax()
    {
        return $this->dpPrixMax;
    }

    /**
     * Set dpDroit
     *
     * @param float $dpDroit
     *
     * @return CtDroitPtac
     */
    public function setDpDroit($dpDroit)
    {
        $this->dpDroit = $dpDroit;

        return $this;
    }

    /**
     * Get dpDroit
     *
     * @return float
     */
    public function getDpDroit()
    {
        return $this->dpDroit;
    }

    /**
     * Set ctGenreCategorie
     *
     * @param \Ct\Service\MetierManagerBundle\Entity\CtGenreCategorie $ctGenreCategorie
     *
     * @return CtDroitPtac
     */
    public function setCtGenreCategorie(\Ct\Service\MetierManagerBundle\Entity\CtGenreCategorie $ctGenreCategorie = null)
    {
        $this->ctGenreCategorie = $ctGenreCategorie;

        return $this;
    }

    /**
     * Get ctGenreCategorie
     *
     * @return \Ct\Service\MetierManagerBundle\Entity\CtGenreCategorie
     */
    public function getCtGenreCategorie()
    {
        return $this->ctGenreCategorie;
    }

    /**
     * Set ctTypeDroitPtac
     *
     * @param \Ct\Service\MetierManagerBundle\Entity\CtTypeDroitPtac $ctTypeDroitPtac
     *
     * @return CtDroitPtac
     */
    public function setCtTypeDroitPtac(\Ct\Service\MetierManagerBundle\Entity\CtTypeDroitPtac $ctTypeDroitPtac = null)
    {
        $this->ctTypeDroitPtac = $ctTypeDroitPtac;

        return $this;
    }

    /**
     * Get ctTypeDroitPtac
     *
     * @return \Ct\Service\MetierManagerBundle\Entity\CtTypeDroitPtac
     */
    public function getCtTypeDroitPtac()
    {
        return $this->ctTypeDroitPtac;
    }
}
