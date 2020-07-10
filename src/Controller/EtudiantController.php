<?php

namespace App\Controller;

use App\Entity\Chambre;
use App\Entity\Etudiant;
use App\Form\EtudiantType;
use App\Repository\EtudiantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
                if($nbreEtudiant>=2 && $etudiant->getChambre()->getId() != 1){
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
                    $cc = strtoupper($etudiant->getNom()[0]);
                    $cc .= strtoupper($etudiant->getNom()[1]);
                    $ll = strtoupper($etudiant->getPrenom()[0]);
                    $ll .= strtoupper($etudiant->getPrenom()[1]);

                    $matricule = $date;
                    $matricule .= $cc;
                    $matricule .= $ll;
                    $matricule .= $serieNombre;

                    $etudiant->setMatricule($matricule);
                    $em->persist($etudiant);
                    $em->flush();

                    $this->addFlash(
                        'info',
                        'Etudiant '.$etudiant->getPrenom().' '.$etudiant->getNom().' enrégistrer avec succes'
                    );
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

       // dd($etudiant->getId());
        if(is_numeric($etudiant->getId())){
            $form = $this->createForm(EtudiantType::class, $etudiant);
            $form->handleRequest($request);
            $msg = "";
            $nbre = 0;
            $chambre_occuper =   $etudiant->getChambre()->getNumeroChambre();

            if($form->isSubmitted()){
                if ($form->isValid()){
                    $temoin = false;
                    $chambre_etudiant = $etudiantRepository->findBy(['Chambre'=>$etudiant->getChambre()]);
                    $nbreEtudiant = count($chambre_etudiant);
                    if($nbreEtudiant>=2 && $etudiant->getChambre()->getId() != 1
                        && $etudiant->getChambre()->getNumeroChambre() !== $chambre_occuper){
                        $temoin = true;
                        foreach ($chambre_etudiant as $chambre){
                            if($chambre->getChambre()->getNumeroChambre() !== $chambre_occuper){
                                $temoin = true;
                                $nbre++;
                            }
                        }
                    }
                    if(($temoin === false))
                    {
                        $matricule = $etudiant->getMatricule()[0];
                        $matricule .= $etudiant->getMatricule()[1];
                        $matricule .= $etudiant->getMatricule()[2];
                        $matricule .= $etudiant->getMatricule()[3];
                        $matricule .= strtoupper($etudiant->getNom()[0]);
                        $matricule .= strtoupper($etudiant->getNom()[1]);
                        $matricule .= strtoupper($etudiant->getPrenom()[0]);
                        $matricule .= strtoupper( $etudiant->getPrenom()[1]);
                        $matricule .= $etudiant->getMatricule()[8];
                        $matricule .= $etudiant->getMatricule()[9];
                        $matricule .= $etudiant->getMatricule()[10];
                        $matricule .= $etudiant->getMatricule()[11];

                        $etudiant->setMatricule($matricule);

                        $em->flush();
                        $this->addFlash(
                            'info',
                            'Modification Réussi'
                        );
                        return $this->redirectToRoute('etudiant');
                    }
                    if($temoin === true ){
                        $msg = 'Chambre pleine';
                    }
                }
            }
        }
        else{
            throw $this->createNotFoundException('The student does not exist');
        }
        return $this->render('etudiant/create.html.twig', array(
            'form' => $form->createView(),
            'msg'=>$msg,
        ));

    }

    /**
     * @Route("/etudiant/{id<[0-9]+>}/delete_message", name="delete_message")
     * @param Request $request
     * @param EntityManagerInterface $em
     * @param Etudiant $etudiant
     * @return Response
     */

    public function messageDelete(Request $request, EntityManagerInterface $em, Etudiant $etudiant):Response{
        $jsonData = array();
        $idx = 0;
        $tabEtudiant = [];
        $jsonData = array(
            "id"=>$etudiant->getId(),
            "prenom"=>$etudiant->getPrenom(),
            "nom"=>$etudiant->getNom(),
            "chambre"=>$etudiant->getChambre()->getNumeroChambre(),
        );
        return new JsonResponse($jsonData);
    }

    /**
     * @Route("/etudiant/{id<[0-9]+>}/delete", name="delete")
     * @param Request $request
     * @param EntityManagerInterface $em
     * @param Etudiant $etudiant
     * @return Response
     */

    public function delete(Request $request, EntityManagerInterface $em, Etudiant $etudiant):Response{
        $em->remove($etudiant);
        $em->flush();
        return $this->redirectToRoute('etudiant');
    }



}
