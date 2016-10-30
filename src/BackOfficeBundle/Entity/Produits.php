<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * produits
 *
 * @ORM\Table("produits")
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Repository\produitsRepository")
 */
class Produits
{

    /**
     * @ORM\ManyToOne(targetEntity="BackOfficeBundle\Entity\Tva")
     * @ORM\JoinColumn(nullable=false)
     */

    private $tva;

    /**
     * @ORM\OneToOne(targetEntity="BackOfficeBundle\Entity\Media",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */

    private $media;

    /**
     * @ORM\ManyToOne(targetEntity="BackOfficeBundle\Entity\Categories")
     * @ORM\JoinColumn(nullable=false)
     */

    private $categories;



    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="soustitre", type="string", length=45 ,nullable=true)
     */
    private $soustitre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=80)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="disponible", type="blob")
     */
    private $disponible;

    /**
     * @var integer
     *
     * @ORM\Column(name="categorie_id", type="integer")
     */
    private $categorieId;

    /**
     * @var integer
     *
     * @ORM\Column(name="image_id", type="integer")
     */
    private $imageId;

    /**
     * @var integer
     *
     * @ORM\Column(name="tva_id", type="integer")
     */
    private $tvaId;


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
     * Set nom
     *
     * @param string $nom
     * @return produits
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set soustitre
     *
     * @param string $soustitre
     * @return produits
     */
    public function setSoustitre($soustitre)
    {
        $this->soustitre = $soustitre;

        return $this;
    }

    /**
     * Get soustitre
     *
     * @return string 
     */
    public function getSoustitre()
    {
        return $this->soustitre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return produits
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return produits
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set disponible
     *
     * @param string $disponible
     * @return produits
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible
     *
     * @return string 
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * Set categorieId
     *
     * @param integer $categorieId
     * @return produits
     */
    public function setCategorieId($categorieId)
    {
        $this->categorieId = $categorieId;

        return $this;
    }

    /**
     * Get categorieId
     *
     * @return integer 
     */
    public function getCategorieId()
    {
        return $this->categorieId;
    }

    /**
     * Set imageId
     *
     * @param integer $imageId
     * @return produits
     */
    public function setImageId($imageId)
    {
        $this->imageId = $imageId;

        return $this;
    }

    /**
     * Get imageId
     *
     * @return integer 
     */
    public function getImageId()
    {
        return $this->imageId;
    }

    /**
     * Set tvaId
     *
     * @param integer $tvaId
     * @return produits
     */
    public function setTvaId($tvaId)
    {
        $this->tvaId = $tvaId;

        return $this;
    }

    /**
     * Get tvaId
     *
     * @return integer 
     */
    public function getTvaId()
    {
        return $this->tvaId;
    }

    /**
     * Set categories
     *
     * @param \BackOfficeBundle\Entity\Categories $categories
     * @return Produits
     */
    public function setCategories(\BackOfficeBundle\Entity\Categories $categories = null)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return \BackOfficeBundle\Entity\Categories 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set tva
     *
     * @param \BackOfficeBundle\Entity\Tva $tva
     * @return Produits
     */
    public function setTva(\BackOfficeBundle\Entity\Tva $tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return \BackOfficeBundle\Entity\Tva 
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Set media
     *
     * @param \BackOfficeBundle\Entity\Media $media
     * @return Produits
     */
    public function setMedia(\BackOfficeBundle\Entity\Media $media)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return \BackOfficeBundle\Entity\Media 
     */
    public function getMedia()
    {
        return $this->media;
    }
}
