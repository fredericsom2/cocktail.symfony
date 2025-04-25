<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {

// Déclare une route pour la page d’accueil ("/")
	#[Route('/list-cocktail', name: "home")]
	public function displayHome() {
        
$cocktails = [
    1 => [
        'id'            => 1,
        'nom'           => 'Mojito',
        'image'         => 'https://neary.fr/cdn/shop/articles/recette-mojito-743966.png?v=1741863487', // photo libre de droits
        'ingredients'   => [
            '50 ml de rhum blanc',
            '½ citron vert (en quartiers)',
            '2 c.à.c. de sucre de canne',
            '8 feuilles de menthe fraîche',
            'Eau pétillante',
            'Glace pilée'
        ],
        'date_creation' => '1942-01-01',
        'description'   => 'Classique cubain ultra-rafraîchissant mêlant menthe et citron vert.'
    ],

    2 => [
        'id'            => 2,
        'nom'           => 'Margarita',
        'image'         => 'https://www.cocktail.fr/wp-content/uploads/2017/05/margarita-1024x673.jpg.webp',
        'ingredients'   => [
            '50 ml de tequila',
            '25 ml de triple sec (Cointreau)',
            '25 ml de jus de citron vert frais',
            'Sel pour givrer le verre',
            'Glace'
        ],
        'date_creation' => '1938-07-04',
        'description'   => 'Tequila, triple-sec et citron vert dans un verre givré de sel pour un équilibre acidulé-salé.'
    ],

    3 => [
        'id'            => 3,
        'nom'           => 'Old Fashioned',
        'image'         => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Trago_old_fashioned.jpg/280px-Trago_old_fashioned.jpg',
        'ingredients'   => [
            '60 ml de bourbon ou rye whisky',
            '1 morceau de sucre',
            '2 traits d’angostura bitters',
            'Zeste d’orange',
            'Glaçon gros format'
        ],
        'date_creation' => '1880-05-15',
        'description'   => 'Icône des classiques : un whisky subtilement sucré et aromatisé aux bitters.'
    ],

    4 => [
        'id'            => 4,
        'nom'           => 'Piña Colada',
        'image'         => 'https://assets.afcdn.com/recipe/20180605/79412_w1024h1024c1cx2000cy3000cxt0cyt0cxb4000cyb6000.jpg',
        'ingredients'   => [
            '60 ml de rhum blanc',
            '90 ml de jus d’ananas',
            '30 ml de crème de coco',
            'Glaçons'
        ],
        'date_creation' => '1954-08-16',
        'description'   => 'Spécialité portoricaine crémeuse et fruitée à base d’ananas et de coco.'
    ],

    5 => [
        'id'            => 5,
        'nom'           => 'Negroni',
        'image'         => 'https://www.bar-evenementiel.com/wp-content/uploads/2024/08/Negroni.jpg',
        'ingredients'   => [
            '30 ml de gin',
            '30 ml de vermouth rouge',
            '30 ml de Campari',
            'Zeste d’orange',
            'Glaçon gros format'
        ],
        'date_creation' => '1919-06-01',
        'description'   => 'Amertume élégante et notes d’agrumes pour ce grand classique italien.'
    ],
];





return $this->render('list-cocktail.html.twig', [
    'cocktails' => $cocktails
]);
}

}