<?php

namespace PI\guidesBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AjoutReser extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {$builder->add('capacite', ChoiceType::class, array('label' =>'Capacite ',
        'choices' =>array(
            '25%' =>'25%',
            '50%'=>'50%',
            '75%'=>'75%',
            '100%'=>'100%')))
            ->add('nbredejour', ChoiceType::class, array('label' =>'nbredejour ',
                'choices' =>array(
                    '1' =>'1',
                    '2'=>'2',
                    '3'=>'3',
                    '4'=>'4',
                '5'=>'5',
                    '6'=>'6'
                )))
            ->add('typerondonne', ChoiceType::class, array('label' =>'typerondonne ',
                'choices' =>array(
                    'Rando Accompagneé' =>'Rando Accompagneé',
                    'Rando MI_Accompagneé'=>'Rando MI_Accompagneé',
                    'Rando Libérté tinéraire'=>'Rando Libérté tinéraire'
                    )))
            ->add('dateres',DateType::class)
        /*
         * ->add('id_cat',EntityType::class,array('class'=>'Eshop\UserBundle\Entity\Categorie','choice_label'=>'nom'))
         */

        ->add('prix')
        ->add('remise', ChoiceType::class, array('label' =>'remise ',
            'choices' =>array(
                '1%' =>'1%',
                '2%'=>'2%',
                '3%'=>'3%',
                '4%'=>'4%',
                '5%'=>'5%',
                '6%'=>'6%'
            )))
        ->add('total')
        ->add('confirmer',CheckboxType::class)
        ->add("Ajouter",SubmitType::class,array(
            'attr'=>array( "class"=>"form-control")))

            ->setMethod('GET');



    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getBlockPrefix()
    {
        return 'piguides_bundle_ajout_reser';
    }
}
