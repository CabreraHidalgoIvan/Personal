<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FiltroTareasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', TextType::class, [
                'required' => false,
                'label' => 'Nombre de la tarea',
            ])
            ->add('estado', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    'Por hacer' => 1,
                    'En progreso' => 2,
                    'Hechas' => 3,
                ],
                'label' => 'Estado de la tarea',
            ])
            ->add('descripcion', TextType::class, [
                'required' => false,
                'label' => 'Descripción de la tarea',
            ])
            ->add('creadoEn', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    'Antiguos primero' => 'ASC',
                    'Recientes primero' => 'DESC',
                ],
                'label' => 'Fecha de creación',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => null,
        ]);
    }
}
