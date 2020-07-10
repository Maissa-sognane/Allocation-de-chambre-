<?php

namespace App\Form;

use App\Entity\Bourse;
use App\Entity\Chambre;
use App\Entity\Etudiant;
use App\Entity\TypeChambre;
use Doctrine\DBAL\Types\DateType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;



class EtudiantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Prenom', 'Symfony\Component\Form\Extension\Core\Type\TextType', [
                'required'=>false,
            ])
            ->add('Nom', 'Symfony\Component\Form\Extension\Core\Type\TextType', [
                'required'=>false,
            ])
            ->add('Email', 'Symfony\Component\Form\Extension\Core\Type\TextType', [
                'required'=>false,
            ])
            ->add('telephone', 'Symfony\Component\Form\Extension\Core\Type\NumberType', [
                'required'=>false,
            ])
            ->add('dateNaissance', 'Symfony\Component\Form\Extension\Core\Type\DateType', array(
                'widget' => 'choice',
                'years' => range(date('Y')-15, date('Y')-70),
            ))
            ->add('Adresse')
            ->add('Chambre', EntityType::class, array(
                'class'=>Chambre::class,
                'placeholder'=>'Choisir',
                'required'=>false,
                'choice_label'=>function($chambre){
                    return $chambre->getNumeroChambre();
                }
            ))
            ->add('Bourse', EntityType::class, array(
                'class'=>Bourse::class,
                'placeholder'=>'Choisir',
                'required'=>false,
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
