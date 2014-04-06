<?php
/**
 * Created by PhpStorm.
 * User: Dominique
 * Date: 31/03/14
 * Time: 22:24
 */

namespace Pred\UserBundle\Form\Type;

use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // Ajoutez vos champs ici, revoilà notre champ *location* :
        $builder->add('profil', 'choice', array(
            'choices'=> array(
                'evaluateur' => 'Evaluateur',
                'coordinateur' => 'Coordinateur',
                'president' => 'Pdt Commission',
                'membre' => 'Membre Commission'
            )
        ));
    }


    public function getName()
    {
        return 'pred_user_registration';
    }

}
