<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CategoriesController extends AbstractController {

// Déclare une route pour la page d’accueil ("/categories")
	#[Route('/categories', name: "categories")]
	public function displayCategories() {
        

		$categories = [
            1 => [
                "id" => 1,
                "nom" => "cocktail coca",
                'image'         => 'https://sf1.topsante.com/wp-content/uploads/topsante/2023/09/mocktail-orange-sanguine-romarin-324x232.jpeg',
                "description" => "cocktails classiques avec alcool"
            ],
            2 => [
                "id" => 2,
                'image'         => 'https://sf1.topsante.com/wp-content/uploads/topsante/2023/09/mocktail-orange-sanguine-romarin-324x232.jpeg',
                "nom" => "mocktail",
                "description" => "cocktails sans alcool"
            ],
            3 => [
                "id" => 3,
                'image'         => 'https://www.1001cocktails.com/wp-content/uploads/1001cocktails/2023/01/shutterstock_167704775.jpg',
                "nom" => "shooter",
                "description" => "moins de 25 cl"
            ],
            4 => [
                "id" => 4,
                'image'         => 'https://www.1001cocktails.com/wp-content/uploads/1001cocktails/2023/01/shutterstock_167704775.jpg',
                "nom" => "cocktails soft",
                "description" => "cocktails sans alcool fort"
            ],
        ];

        return $this->render('categories.html.twig', [
            'categories' => $categories
        ]);
        }
        
        }