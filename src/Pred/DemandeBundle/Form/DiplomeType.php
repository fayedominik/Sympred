<?php

namespace Pred\DemandeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DiplomeType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('domaineFormation')
            ->add('mention')
            ->add('specialite')
            ->add('volumeHoraire')
            ->add('natureEvaluation', 'choice', array(
                'choices' => array(
                    'Contrôle continu' => 'Controle continu',
                    'Examens terminaux' => 'Examens terminaux',
                )
            ))
            ->add('nbAnneeUniv')
            ->add('critereAdmission')
            ->add('natureDemande', 'choice', array(
                'choices' => array(
                    'Reconnaissance' => 'Reconnaissance',
                    'Equivalence'    => 'Equivalence',
                    'Reconnaissance et Equivalence' => 'Reconnaissance et Equivalence',
                )
            ))
            ->add('sanctionEtudes', 'choice', array(
                'choices'      => array(
                    'DEUG'     => 'DEUG',
                    'LICENCE'  => 'LICENCE',
                    'MAITRISE' => 'MAITRISE',
                    'D.E.A.'   => 'D.E.A.',
                    'MASTER '  => 'MASTER ',
                    'DOCTORAT' => 'DOCTORAT',
                    'BTS'      => 'BTS',
                    'DUT'      => 'DUT',
                    'INGENIEUR TRAVAUX' => 'INGENIEUR TRAVAUX',
                    'INGENIEUR CONCEPTION' => 'INGENIEUR CONCEPTION',
                    'DESS'     => 'DESS'
                )))
            ->add('commission', 'choice', array(
                'choices' => array(
                    'Lettres, sciences Humaines et Grandes Ecoles' => 'Lettres, sciences Humaines et Grandes Ecoles',
                    'Droit, Sciences Economiques, Gestion et Grandes Ecoles' => 'Droit, Sciences Economiques, Gestion et Grandes Ecoles',
                    'Sciences, Médecine et Grandes Ecoles' => 'Sciences, Médecine et Grandes Ecoles',
                )))
            /*->add('etablissement', 'entity', array(
                'class' => 'PredDemandeBundle:Etablissement',
                'property' => 'nom',
            ))*/
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pred\DemandeBundle\Entity\Diplome'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pred_demandebundle_diplome';
    }
}
