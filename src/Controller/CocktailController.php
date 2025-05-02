<?php

namespace App\Controller;

// Importation des classes nécessaires de Symfony
use App\Entity\Cocktail;
use App\Repository\CocktailsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

// Définition du contrôleur OldController qui hérite du contrôleur de base de Symfony
class CocktailController extends AbstractController {
    
    
    // Déclaration d'une route qui sera accessible via l'URL '/old' et portera le nom 'old'
    #[Route('/cocktails/{id}', name: 'single-cocktail')]
    public function displaySingle($id,CocktailsRepository $cocktailsRepository){
    
        
		$cocktail = $cocktailsRepository->findOneById($id); 
        
        // Rend (affiche) la page 'old.html.twig' en passant le cocktail récupéré aux variables de la vue
        return $this->render('single-cocktail.html.twig', [
            'cocktail' => $cocktail
        ]);

    }



    #[Route('/create-cocktail', name: "create-cocktail")]
	public function createCocktail(Request $request) {


        if($request->isMethod('POST')){

            $name = $request->request->get('name');
            $ingredients = $request->request->get('ingredients');
            $description = $request->request->get('description');
            $image = $request->request->get('image');

            $cocktail = new Cocktail($name, $ingredients, $description, $image);

            $this->addFlash("success", "Cocktail : ". $cocktail->name ." enregistré");

        } 
		return $this->render('create-cocktail.html.twig');


    }

}
