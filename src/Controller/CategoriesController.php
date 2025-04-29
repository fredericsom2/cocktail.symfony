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
                'image'         => 'https://punchdrink.com/wp-content/uploads/2014/07/Cuba-Libre.jpg',
                "description" => "cocktails classiques avec alcool"
            ],
            2 => [
                "id" => 2,
                'image'         => 'https://images.immediate.co.uk/production/volatile/sites/30/2020/04/mocktail-3b9ab7d.jpg',
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