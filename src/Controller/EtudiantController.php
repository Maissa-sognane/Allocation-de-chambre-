<?php

namespace App\Controller;

use App\Entity\Etudiant;
use App\Form\EtudiantType;
use App\Repository\EtudiantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{
    /**
     * @Route("/etudiant", name="etudiant")
     * @param EtudiantRepository $etudiantRepository
     * @return Response
     */
    public function index(EtudiantRepository $etudiantRepository)
    {
        $etudiants = $etudiantRepository->findAll();
        return $this->render('etudiant/index.html.twig', compact(('etudiants')));
    }

    /**
     * @Route("/etudiant/create", name="etudiant_create")
     * @param Request $request
     * @param EntityManagerInterface $em
     * @param EtudiantRepository $etudiantRepository
     * @return Response
     */
    public function create(Request $request, EntityManagerInterface $em, EtudiantRepository $etudiantRepository):Response
    {

        $etudiant = new Etudiant();
        $form = $this->createForm(EtudiantType::class, $etudiant);
        $form->handleRequest($request);
        $msg = "";
      //  dd($chambre_etudiant);
        if($form->isSubmitted()){
            $chambre_etudiant = $etudiantRepository->findBy(['Chambre'=>$etudiant->getChambre()]);
            $nbreEtudiant = count($chambre_etudiant);
            if ($form->isValid()){
                if($nbreEtudiant>=2){
                    $msg = 'Chambre pleine';
                }else{
                    function random_1($car){
                        $string = "";
                        $chaine = "0123456789";
                        srand((double)microtime()*1000000);
                        for($i=0; $i<$car; $i++) {
                            $string .= $chaine[rand()%strlen($chaine)];
                        }
                        return $string;
                    }
                    $serieNombre =  random_1(4);
                    $date = date('Y');
                    $cc = $etudiant->getNom()[0];
                    $cc .= $etudiant->getNom()[1];
                    $ll = $etudiant->getPrenom()[0];
                    $ll .= $etudiant->getPrenom()[1];

                    $matricule = $date;
                    $matricule .= $cc;
                    $matricule .= $ll;
                    $matricule .= $serieNombre;

                    $etudiant->setMatricule($matricule);

                    $em->persist($etudiant);
                    $em->flush();
                    return $this->redirectToRoute('etudiant');
                }

            }

        }
        return $this->render('etudiant/create.html.twig', array(
            'form' => $form->createView(),
            'msg'=>$msg,
        ));
    }

    /**
     * @Route("/etudiant/{id<[0-9]+>}/update", name="etudiant_update")
     * @param Request $request
     * @param EntityManagerInterface $em
     * @param Etudiant $etudiant
     * @param EtudiantRepository $etudiantRepository
     * @return Response
     */

    public function update(Request $request, EntityManagerInterface $em, Etudiant $etudiant, EtudiantRepository $etudiantRepository):Response{

        $form = $this->createForm(EtudiantType::class, $etudiant);
        $form->handleRequest($request);

        $msg = "";
        $chambre =   $etudiant->getChambre();
        if($form->isSubmitted()){
            $chambre_etudiant = $etudiantRepository->findBy(['Chambre'=>$etudiant->getChambre()]);
            $nbreEtudiant = count($chambre_etudiant);

            if ($form->isValid()){
                if($chambre !== $etudiant->setChambre($chambre) &&  $nbreEtudiant>=2){
                    $msg = 'Chambre pleine';

                }else{


                    function random_1($car){
                        $string = "";
                        $chaine = "0123456789";
                        srand((double)microtime()*1000000);
                        for($i=0; $i<$car; $i++) {
                            $string .= $chaine[rand()%strlen($chaine)];
                        }
                        return $string;
                    }
                    $serieNombre =  random_1(4);
                    $date = date('Y');
                    $cc = $etudiant->getNom()[0];
                    $cc .= $etudiant->getNom()[1];
                    $ll = $etudiant->getPrenom()[0];
                    $ll .= $etudiant->getPrenom()[1];

                    $matricule = $date;
                    $matricule .= $cc;
                    $matricule .= $ll;
                    $matricule .= $serieNombre;

                    $etudiant->setMatricule($matricule);

                    $em->flush();
                    return $this->redirectToRoute('etudiant');
                }

            }

        }
        return $this->render('etudiant/create.html.twig', array(
            'form' => $form->createView(),
            'msg'=>$msg,
        ));

    }



}
