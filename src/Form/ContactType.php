<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class ContactType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options){
            $builder
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('email', EmailType::class)
            ->add('domainetravail', TextType::class)
            ->add('numerorue', IntegerType::class)
            ->add('copepostal', TextType::class)
            ->add('ville', TextType::class)
            ->add('pays', TextType::class)
            ->add('numerorue', IntegerType::class)
            ->add('image', TextType::class)
            ->add('Envoyer', SubmitType::class);
            
    }

}