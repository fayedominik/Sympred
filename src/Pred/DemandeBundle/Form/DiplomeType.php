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
            ->add('natureEvaluation')
            ->add('nbAnneeUniv')
            ->add('critereAdmission')
            ->add('natureDemande')
            ->add('sanctionEtudes')
            ->add('commission')
            ->add('rapport')
            ->add('etablissement')
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
