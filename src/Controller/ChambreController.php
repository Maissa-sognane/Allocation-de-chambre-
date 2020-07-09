<?php

namespace App\Controller;

use App\Entity\Chambre;
use App\Entity\Etudiant;
use App\Form\ChambreType;
use App\Form\EtudiantType;
use App\Repository\ChambreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChambreController extends AbstractController
{
    /**
     * @Route("/chambre", name="chambre")
     * @param ChambreRepository $chambreRepository
     * @return Response
     */
    public function index(ChambreRepository $chambreRepository)
    {
        $chambre = $chambreRepository->findAll();
        return $this->render('chambre/index.html.twig', compact(('chambre')));
    }

    /**
     * @Route("/chambre/ajax")
     * @param Request $request
     * @return Response
     */
    public function data(Request $request)
    {
        $chambre = $this->getDoctrine()
                    ->getRepository('App:Chambre')
                    ->findAll();
        if ($request->isXmlHttpRequest() || $request->query->get('showJson') == 1) {
            $jsonData = array();
            $idx = 0;
            foreach($chambre as $chamb) {
                $temp = array(
                    'id'=> $chamb->getId(),
                    'numerobatiment' => $chamb->getNumeroBatiment(),
                    'numerochambre' => $chamb->getNumeroChambre(),
                    'type'=> $chamb->getTypeChambre()->getLibele(),
                );
                $jsonData[$idx++] = $temp;
            }
            return new JsonResponse($jsonData);
        } else {
            return $this->render('chambre/index.html.twig');
        }
    }


    /**
     * @Route("/chambre/create", name="chambre_create")
     * @param Request $request
     * @param EntityManagerInterface $em
     * @return Response
     */
    public function create(Request $request, EntityManagerInterface $em):Response
    {
        $chambre = new Chambre();
        $form = $this->createForm(ChambreType::class, $chambre);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
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
            $numero= $chambre->getNumeroBatiment();
            $numero .= $serieNombre;
            $chambre->setNumeroChambre($numero);

            $em->persist($chambre);
            $em->flush();

            return $this->redirectToRoute('chambre');
        }
        return $this->render('chambre/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/chambre/{id<[0-9]+>}/update ", name="chambre_update", methods={"POST", "GET"})
     * @param Request $request
     * @param EntityManagerInterface $em
     * @param Chambre $chambre
     * @return Response
     */

    public function update(Request $request, EntityManagerInterface $em, Chambre $chambre):Response
    {
        $form = $this->createForm(ChambreType::class, $chambre);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $numeroChambre = $chambre->getNumeroBatiment();
            $numeroChambre .= $chambre->getNumeroChambre()[1];
            $numeroChambre .= $chambre->getNumeroChambre()[2];
            $numeroChambre .= $chambre->getNumeroChambre()[3];
            $numeroChambre .= $chambre->getNumeroChambre()[4];
            $chambre->setNumeroChambre($numeroChambre);
            $em->flush();
            return $this->redirectToRoute('chambre');
        }
        return $this->render('chambre/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
