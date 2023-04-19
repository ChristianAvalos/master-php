<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Animal;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;
use Symfony\Component\Form\Extension\Core\Type\TextType as TypeTextType;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Form\AnimalType;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints\Email;


class AnimalController extends AbstractController
{
    public function validarEmail($email){
        $validator = Validation::createValidator();
        $errores = $validator->validate($email,[
            new Email()
        ]);
        if(count($errores)!=0){
            echo 'El email no se ha validado correctamente';
            foreach($errores as $error){
                echo $error->getMessage()."<br/>";
            }
        }else{
            echo 'El email se ha validado correctamente';
        }
        die();
    }

    public function crearAnimal(Request $request,PersistenceManagerRegistry $doctrine){
        $animal = new Animal();
        $form = $this->createForm(AnimalType::class, $animal);
                    
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            $em = $doctrine->getManager();
            $em->persist($animal);
            $em->flush();
            //Session flash
            $session = new Session();
            $session->getFlashBag()->add('message','Animal creado');


            return $this->redirect($request->getUri());

        }
        return $this->render('animal/crear-animal.html.twig',[
            'form' => $form->createView()
        ]);
    }

    #[Route('/animal', name: 'app_animal')]
    public function index(PersistenceManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $animal_repo= $doctrine->getRepository(Animal::class);
        
        $animales = $animal_repo->findAll();

        $animal = $animal_repo->findBY([
            'raza' => 'africana'
        ],[
            'id' => 'DESC'
        ]);

       // var_dump($animal);

        //Query builder

        $qb = $animal_repo->createQueryBuilder('a')
                //->andWhere("a.raza = :raza")
                //->setParameter('raza','americana')
                ->OrderBy('a.id','DESC')
                ->getQuery();

        $resultset = $qb->execute();

        //var_dump($resultset);

        //DQL
        $dql= "SELECT a FROM App\Entity\Animal a WHERE a.raza = 'americana'";
        $query = $em->createQuery($dql);
        $resultset = $query->execute();

        //var_dump($resultset);
        
        //SQL
        $conection = $doctrine->getConnection();
        $sql = "SELECT * FROM animales ORDER BY id DESC";
        $prepare = $conection->executeQuery($sql);
        $resultset = $prepare->fetchAll();
       // var_dump($resultset);


        //Otra forma de ejecutar sql en symfony 6
        $connection = $doctrine->getConnection();
        $sql = 'SELECT * FROM animales ORDER BY id DESC';
        $prepare = $connection->query($sql);
        $resultset = $prepare->fetchAll();
       // var_dump($resultset);
        
        //Repositorio 
        $animals = $animal_repo->getAnimalsOrderId('DESC');
        var_dump($animal);


        return $this->render('animal/index.html.twig', [
            'controller_name' => 'AnimalController',
            'animales' => $animales,
        ]);
    }

    public function save(PersistenceManagerRegistry $doctrine){
        //Guardar en la tabla de la bd
        //Cargo el em
        $entityManager = $doctrine->getManager();
        //Creo  el objeto y le doy valores
        $animal = new Animal();
        $animal->setTipo('Avextruz');
        $animal->setColor('verde');
        $animal->setRaza('africana');

        //guardae objeto en doctrine 
        $entityManager->persist($animal);

        //volcar datos en la tabla
        $entityManager->flush();

        return new Response('El animal guardado tiene el id:'.$animal->getId());
    }



    public function animal(Animal $animal,PersistenceManagerRegistry $doctrine){
        /*
        //cargar repositorio 
        $animal_repo =$doctrine->getRepository(Animal::class);

        //consulta
        $animal=$animal_repo->find($id);*/

        if(!$animal){
            $message='El animal no existe';
        }else{
            $message='Tu animal elegido es = '.$animal->getTipo().' - '.$animal->getRaza();
        }

        return new Response($message);
    }
    public function update(PersistenceManagerRegistry $doctrine,$id){
        //cargar doctrine 
        //cargar entityManager
        $em = $doctrine->getManager();
        //cargar repo Animal 
        
        $animal_repo =$em->getRepository(Animal::class);
        
        //Find para sacar el objeto 
        $animal = $animal_repo->find($id);


        //Comprobar si el objeto existe
        if(!$animal){
            $message = 'El animal no existe';
        }else{
        //Asignarle los valores al objeto 
            $animal->setTipo("perro $id");
            $animal->setColor('marron');

        //persistir el objeto en doctrine 
            $em->persist($animal);

        //volcar en la base de datos 
            $em->flush($animal);

            $message = 'Has actualizado el animal '.$animal->getId();
        }

        //return 
        return new Response($message);

    }

    public function delete(Animal $animal,PersistenceManagerRegistry $doctrine){
        $em = $doctrine->getManager();

        if($animal && is_object($animal)){
            $em->remove($animal);

            $em->flush($animal);

            $message = "Animal borrado correctamente";
        }else{
            $message = "Animal no existe";
        }



        

        return new Response($message);
    }



}
