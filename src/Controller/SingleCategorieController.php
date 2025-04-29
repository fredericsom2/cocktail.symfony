<?php


namespace App\Controller;


// Importation des classes nécessaires de Symfony
use App\Repository\CategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SingleCategorieController extends AbstractController {

// Déclare une route pour la page d’accueil ("/categories")
	#[Route('/show-categorie/{id}', name: "singlecategorie")]
	public function displaySingleCategorie($id) {
        

        // je créé une instance de la classe CocktailsRepository
		// pour appeler la fonction (méthode) findAll
		// qui returne tous les cocktails
		$categoriesRepository = new CategoriesRepository;
		$categories = $categoriesRepository->findAll(); 
        
		

        $categories = $categories[$id];

        return $this->render('show-categorie.html.twig', [
            'categories' => $categories
        ]);
        }
        
        }