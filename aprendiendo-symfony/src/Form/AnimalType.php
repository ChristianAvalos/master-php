<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType as TypeTextType;

class AnimalType extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder->add('tipo',TypeTextType::class,[
            'label'=>'Tipo animal',])
        ->add('color',TypeTextType::class)
        ->add('raza',TypeTextType::class)
        ->add('submit',SubmitType::class,[
            'label'=>'Crear animal',
            'attr'=>['class'=>'btn btn-success']
        ]);
    }
}

?>