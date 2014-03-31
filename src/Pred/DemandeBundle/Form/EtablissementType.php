<?php

namespace Pred\DemandeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EtablissementType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('adresse')
            ->add('email')
            ->add('username')
            ->add('password', 'password')
            ->add('pays', 'choice', array(
                'choices' => array(
                    'Benin' => 'Bénin',
                    'Burkina Faso' => 'Burkina Faso',
                    'Burundi' => 'Burundi',
                    'Cameroun' => 'Cameroun',
                    'Centrafrique' => 'Centrafrique',
                    'Congo' => 'Congo',
                    'Cote d\'ivoire' => 'Cote d\'ivoire',
                    'Gabon' => 'Gabon',
                    'Guinée' => 'Guinée',
                    'Madagascar' => 'Madagascar',
                    'Mali' => 'Mali',
                    'Niger' => 'Niger',
                    'Rwanda' => 'Rwanda',
                    'Sénégal' => 'Sénégal',
                    'Tchad' => 'Tchad',
                    'Togo' => 'Togo',) )
                )
            ->add('captcha', 'captcha', array(
                'width' => 160,
                'height' => 50,
                'length' => 6,) // That's all !
            );
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pred\DemandeBundle\Entity\Etablissement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pred_demandebundle_etablissement';
    }
}
