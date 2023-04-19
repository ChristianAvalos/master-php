<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;

use App\Entity\User;
use App\Form\RegisterType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserController extends AbstractController
{
    //#[Route('/user', name: 'app_user')]
    public function register(Request $request, UserPasswordHasherInterface  $encoder,PersistenceManagerRegistry $doctrine): Response
    {
        $user = new User();
        $form = $this->createForm(RegisterType::class,$user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $user->setRole('ROLE_USER');
            $user->setCreatedAt(new \DateTime('now'));
            $encoded = $encoder->hashPassword($user, $user->getPassword());

            $user->setPassword($encoded);
            //guardar usuario
            $em = $doctrine->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('tasks');
        }
        return $this->render('user/register.html.twig', [
            'form'=>$form->createView()
        ]);

    }
    public function login(AuthenticationUtils $autenticationUtils){
        $error = $autenticationUtils->getLastAuthenticationError();
        
        $lastUsername = $autenticationUtils->getLastUsername();

        return $this->render('user/login.html.twig',array(
            'error' => $error,
            'last_username' => $lastUsername
        ));
    }


}
