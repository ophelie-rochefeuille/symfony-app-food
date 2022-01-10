<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Restaurant;
use Doctrine\ORM\EntityManagerInterface;

class RestaurantController extends AbstractController
{
    /**
     * @Route("/restaurant", name="restaurant")
     */
    public function index(): Response
    {
        return $this->render('restaurant/index.html.twig', [
            'controller_name' => 'RestaurantController',
        ]);
    }

    /**
     * @Route("/restaurant/create", name="restaurant")
     */
    public function create(Request $request, EntityManagerInterface $em)
    {
        if($request->isMethod('POST')){
            $data = $request->request->all();

            $restaurant = new Restaurant;
            $restaurant->setName($data['name']);
            $restaurant->setAdress($data['adress']);
            $restaurant->setPhone($data['phone']);

            $em->persist($restaurant);
            $em->flush();

            return $this->redirect('/admin');
        }
        
        return $this->render('restaurant/create.html.twig');
    }
}
