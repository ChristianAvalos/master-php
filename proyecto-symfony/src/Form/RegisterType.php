<?php 
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class RegisterType extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder->add('name',TextType::class,array(
            'label' =>'Nombre'
        ))
        ->add('surname',TextType::class,array(
            'label' =>'Apellidos'
        ))
        ->add('email',EmailType::class,array(
            'label' =>'Correo electronico'
        ))
        ->add('password',PasswordType::class,array(
            'label' =>'Contrasena'
        ))
        ->add('submit',SubmitType::class,array(
            'label' =>'Registrarse'
        ))
        
        ;
    }

}


?>