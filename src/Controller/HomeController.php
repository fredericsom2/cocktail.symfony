<?php


namespace App\Controller;

use App\Repository\CocktailsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {

// Déclare une route pour la page d’accueil ("/")
	#[Route('/', name: "home")]
	public function displayHome() {


        // je créé une instance de la classe CocktailsRepository
		// pour appeler la fonction (méthode) findAll
		// qui returne tous les cocktails
		$cocktailsRepository = new CocktailsRepository;
		$cocktails = $cocktailsRepository->findAll();
        

return $this->render('home.html.twig', [
    'cocktails' => $cocktails
]);
}

}