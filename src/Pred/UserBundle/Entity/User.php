<?php
/**
 * Created by PhpStorm.
 * User: Dominique
 * Date: 31/03/14
 * Time: 12:43
 */

namespace Pred\UserBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="pred_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $profil;

    public function setProfil($profil)
    {
        $this->profil = $profil;
    }

    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Pred\DemandeBundle\Entity\Evaluateur")
     */
    private $evaluateur;

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
     * Set evaluateur
     *
     * @param \Pred\DemandeBundle\Entity\Evaluateur $evaluateur
     * @return User
     */
    public function setEvaluateur(\Pred\DemandeBundle\Entity\Evaluateur $evaluateur = null)
    {
        $this->evaluateur = $evaluateur;

        return $this;
    }

    /**
     * Get evaluateur
     *
     * @return \Pred\DemandeBundle\Entity\Evaluateur 
     */
    public function getEvaluateur()
    {
        return $this->evaluateur;
    }
}
