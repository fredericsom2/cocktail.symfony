<?php


namespace App\Controller;

use App\Repository\CategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CategoriesController extends AbstractController {

// Déclare une route pour la page d’accueil ("/categories")
	#[Route('/categories', name: "categories")]
	public function displayCategories(CategoriesRepository $CategoriesRepository) {
        
      
		$categories = $CategoriesRepository->findAll(); 

        return $this->render('categories.html.twig', [
            'categories' => $categories
        ]);
    }

    // Déclare une route pour la page d’accueil ("/categories")
	#[Route('/show-categorie/{id}', name: "singlecategorie")]
	public function displaySingleCategorie($id,CategoriesRepository $CategoriesRepository) {
        

        // je créé une instance de la classe CocktailsRepository
		// pour appeler la fonction (méthode) 
		// qui retourne tous les cocktails
		
		$categories = $CategoriesRepository->findOneById($id); 
        
		

        

        return $this->render('show-categorie.html.twig', [
            'categories' => $categories
        ]);
    }
        
}