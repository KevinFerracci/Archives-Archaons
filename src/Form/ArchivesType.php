<?php

namespace App\Form;

use App\Entity\Archives;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArchivesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Type')
            ->add('urlYoutube')
            ->add('urlDownload')
            ->add('urlGit')
            ->add('title')
            ->add('content')
            ->add('description')
            ->add('utilisation')
            ->add('installation')
            ->add('website_description')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Archives::class,
        ]);
    }
}
