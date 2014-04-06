<?php

namespace Pred\DemandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diplome
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pred\DemandeBundle\Entity\DiplomeRepository")
 */
class Diplome
{
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
     * @ORM\Column(name="domaineFormation", type="string", length=255)
     */
    private $domaineFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="mention", type="string", length=255)
     */
    private $mention;

    /**
     * @var string
     *
     * @ORM\Column(name="specialite", type="string", length=255)
     */
    private $specialite;

    /**
     * @var integer
     *
     * @ORM\Column(name="volumeHoraire", type="integer")
     */
    private $volumeHoraire;

    /**
     * @var string
     *
     * @ORM\Column(name="natureEvaluation", type="string", length=255)
     */
    private $natureEvaluation;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbAnneeUniv", type="integer")
     */
    private $nbAnneeUniv;

    /**
     * @var string
     *
     * @ORM\Column(name="critereAdmission", type="string", length=255)
     */
    private $critereAdmission;

    /**
     * @var string
     *
     * @ORM\Column(name="natureDemande", type="string", length=255)
     */
    private $natureDemande;

    /**
     * @var string
     *
     * @ORM\Column(name="sanctionEtudes", type="string", length=255)
     */
    private $sanctionEtudes;

    /**
     * @var string
     *
     * @ORM\Column(name="commission", type="string", length=255)
     */
    private $commission;

    /**
    * on choisi l'entite diplome comme proprietaire car on aura plus tendance a recup le rapport a partir du diplome que l'inverse
    * @ORM\OneToOne(targetEntity="Pred\DemandeBundle\Entity\Rapport", cascade={"persist"})
    */
    private $rapport;

    /**
     * @ORM\ManyToOne(targetEntity="Pred\DemandeBundle\Entity\Etablissement")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etablissement;

    /**
     * @ORM\ManyToOne(targetEntity="Pred\DemandeBundle\Entity\Evaluateur")
     */
        private $evaluateur;

    /**
     * @param mixed $rapport
     */
    public function setRapport(Rapport $rapport = null)
    {
        $this->rapport = $rapport;
    }

    /**
     * @return mixed
     */
    public function getRapport()
    {
        return $this->rapport;
    }


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
     * Set domaineFormation
     *
     * @param string $domaineFormation
     * @return Diplome
     */
    public function setDomaineFormation($domaineFormation)
    {
        $this->domaineFormation = $domaineFormation;

        return $this;
    }

    /**
     * Get domaineFormation
     *
     * @return string 
     */
    public function getDomaineFormation()
    {
        return $this->domaineFormation;
    }

    /**
     * Set mention
     *
     * @param string $mention
     * @return Diplome
     */
    public function setMention($mention)
    {
        $this->mention = $mention;

        return $this;
    }

    /**
     * Get mention
     *
     * @return string 
     */
    public function getMention()
    {
        return $this->mention;
    }

    /**
     * Set specialite
     *
     * @param string $specialite
     * @return Diplome
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return string 
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set volumeHoraire
     *
     * @param integer $volumeHoraire
     * @return Diplome
     */
    public function setVolumeHoraire($volumeHoraire)
    {
        $this->volumeHoraire = $volumeHoraire;

        return $this;
    }

    /**
     * Get volumeHoraire
     *
     * @return integer 
     */
    public function getVolumeHoraire()
    {
        return $this->volumeHoraire;
    }

    /**
     * Set natureEvaluation
     *
     * @param string $natureEvaluation
     * @return Diplome
     */
    public function setNatureEvaluation($natureEvaluation)
    {
        $this->natureEvaluation = $natureEvaluation;

        return $this;
    }

    /**
     * Get natureEvaluation
     *
     * @return string 
     */
    public function getNatureEvaluation()
    {
        return $this->natureEvaluation;
    }

    /**
     * Set nbAnneeUniv
     *
     * @param integer $nbAnneeUniv
     * @return Diplome
     */
    public function setNbAnneeUniv($nbAnneeUniv)
    {
        $this->nbAnneeUniv = $nbAnneeUniv;

        return $this;
    }

    /**
     * Get nbAnneeUniv
     *
     * @return integer 
     */
    public function getNbAnneeUniv()
    {
        return $this->nbAnneeUniv;
    }

    /**
     * Set critereAdmission
     *
     * @param string $critereAdmission
     * @return Diplome
     */
    public function setCritereAdmission($critereAdmission)
    {
        $this->critereAdmission = $critereAdmission;

        return $this;
    }

    /**
     * Get critereAdmission
     *
     * @return string 
     */
    public function getCritereAdmission()
    {
        return $this->critereAdmission;
    }

    /**
     * Set natureDemande
     *
     * @param string $natureDemande
     * @return Diplome
     */
    public function setNatureDemande($natureDemande)
    {
        $this->natureDemande = $natureDemande;

        return $this;
    }

    /**
     * Get natureDemande
     *
     * @return string 
     */
    public function getNatureDemande()
    {
        return $this->natureDemande;
    }

    /**
     * Set sanctionEtudes
     *
     * @param string $sanctionEtudes
     * @return Diplome
     */
    public function setSanctionEtudes($sanctionEtudes)
    {
        $this->sanctionEtudes = $sanctionEtudes;

        return $this;
    }

    /**
     * Get sanctionEtudes
     *
     * @return string 
     */
    public function getSanctionEtudes()
    {
        return $this->sanctionEtudes;
    }

    /**
     * Set commission
     *
     * @param string $commission
     * @return Diplome
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Get commission
     *
     * @return string 
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Set etablissement
     *
     * @param \Pred\DemandeBundle\Entity\Etablissement $etablissement
     * @return Diplome
     */
    public function setEtablissement(\Pred\DemandeBundle\Entity\Etablissement $etablissement)
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Get etablissement
     *
     * @return \Pred\DemandeBundle\Entity\Etablissement 
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    /**
     * Set evaluateur
     *
     * @param \Pred\DemandeBundle\Entity\Evaluateur $evaluateur
     * @return Diplome
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
