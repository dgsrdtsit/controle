<?php

namespace Ct\Service\MetierManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtGenre
 *
 * @ORM\Table(name="ct_genre")
 * @ORM\Entity
 */
class CtGenre
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
     * @var string
     *
     * @ORM\Column(name="gr_libelle", type="string", length=255, nullable=true)
     */
    private $grLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="gr_code", type="string", length=50, nullable=true)
     */
    private $grCode;

    /**
     * @var \CtGenreCategorie
     *
     * @ORM\ManyToOne(targetEntity="CtGenreCategorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ct_genre_categorie_id", referencedColumnName="id")
     * })
     */
    private $ctGenreCategorie;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set grLibelle
     *
     * @param string $grLibelle
     *
     * @return CtGenre
     */
    public function setGrLibelle($grLibelle)
    {
        $this->grLibelle = $grLibelle;

        return $this;
    }

    /**
     * Get grLibelle
     *
     * @return string
     */
    public function getGrLibelle()
    {
        return $this->grLibelle;
    }

    /**
     * Set grCode
     *
     * @param string $grCode
     *
     * @return CtGenre
     */
    public function setGrCode($grCode)
    {
        $this->grCode = $grCode;

        return $this;
    }

    /**
     * Get grCode
     *
     * @return string
     */
    public function getGrCode()
    {
        return $this->grCode;
    }

    /**
     * Set ctGenreCategorie
     *
     * @param \Ct\Service\MetierManagerBundle\Entity\CtGenreCategorie $ctGenreCategorie
     *
     * @return CtGenre
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
}
