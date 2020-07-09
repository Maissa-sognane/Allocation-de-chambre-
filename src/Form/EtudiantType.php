<?php

namespace App\Form;

use App\Entity\Bourse;
use App\Entity\Chambre;
use App\Entity\Etudiant;
use App\Entity\TypeChambre;
use Doctrine\DBAL\Types\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;



class EtudiantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Prenom')
            ->add('Nom')
            ->add('Email')
            ->add('telephone')
            ->add('dateNaissance', 'Symfony\Component\Form\Extension\Core\Type\DateType', array(
                'widget' => 'choice',
                'years' => range(date('Y'), date('Y')-70),
            ))
            ->add('Adresse')
            ->add('Chambre', EntityType::class, array(
                'class'=>Chambre::class,
                'placeholder'=>'Choisir',
                'choice_label'=>function($chambre){
                    return $chambre->getNumeroChambre();
                }
            ))
            ->add('Bourse', EntityType::class, array(
                'class'=>Bourse::class,
                'placeholder'=>'Choisir',
                'choice_label'=>function($bourse){
                    return $bourse->getlibele();
                }
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Etudiant::class,
        ]);
    }
}
