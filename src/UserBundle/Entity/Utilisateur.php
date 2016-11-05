<?php


namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @ORM\Entity
 * @ORM\Table()
 */
class Utilisateur extends BaseUser
{
    /**
     * @var \DateTime()
     *
     * @ORM\Column(name="date",type="datetime")
     */
    private $date;
    
    /**
     * @ORM\OneToMany(targetEntity="BackOfficeBundle\Entity\UtilisateursAdresses",mappedBy="utilisateur",cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateuradresse;

    /**
     * @ORM\OneToMany(targetEntity="BackOfficeBundle\Entity\Commandes",mappedBy="utilisateur",cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $commandes;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        $this->utilisateuradresse = new \Doctrine\Common\Collections\ArrayCollection();
        $this->commandes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add utilisateuradresse
     *
     * @param \BackOfficeBundle\Entity\UtilisateursAdresses $utilisateuradresse
     * @return Utilisateur
     */
    public function addUtilisateuradresse(\BackOfficeBundle\Entity\UtilisateursAdresses $utilisateuradresse)
    {
        $this->utilisateuradresse[] = $utilisateuradresse;

        return $this;
    }

    /**
     * Remove utilisateuradresse
     *
     * @param \BackOfficeBundle\Entity\UtilisateursAdresses $utilisateuradresse
     */
    public function removeUtilisateuradresse(\BackOfficeBundle\Entity\UtilisateursAdresses $utilisateuradresse)
    {
        $this->utilisateuradresse->removeElement($utilisateuradresse);
    }

    /**
     * Get utilisateuradresse
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUtilisateuradresse()
    {
        return $this->utilisateuradresse;
    }

    /**
     * Add commandes
     *
     * @param \BackOfficeBundle\Entity\Commandes $commandes
     * @return Utilisateur
     */
    public function addCommande(\BackOfficeBundle\Entity\Commandes $commandes)
    {
        $this->commandes[] = $commandes;

        return $this;
    }

    /**
     * Remove commandes
     *
     * @param \BackOfficeBundle\Entity\Commandes $commandes
     */
    public function removeCommande(\BackOfficeBundle\Entity\Commandes $commandes)
    {
        $this->commandes->removeElement($commandes);
    }

    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommandes()
    {
        return $this->commandes;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Utilisateur
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}
