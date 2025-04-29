<?php

namespace App\Controller;

// Importation des classes nécessaires de Symfony
use App\Repository\CocktailsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

// Définition du contrôleur OldController qui hérite du contrôleur de base de Symfony
class OldController extends AbstractController {
    
    
    // Déclaration d'une route qui sera accessible via l'URL '/old' et portera le nom 'old'
    #[Route('/old/{id}', name: 'old')]
    public function displayOld($id){
    

        // je créé une instance de la classe CocktailsRepository
		// pour appeler la fonction (méthode) findAll
		// qui returne tous les cocktails
		$cocktailsRepository = new CocktailsRepository;
		$cocktails = $cocktailsRepository->findAll(); 
        
    


    {
        $cocktail = $cocktails[$id];

    // Rend (affiche) la page 'old.html.twig' en passant le cocktail récupéré aux variables de la vue
    return $this->render('old.html.twig', [
        'cocktail' => $cocktail
    ]);

    }


}}
