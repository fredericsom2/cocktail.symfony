<?php

namespace App\Repository;


/**
 * Classe CocktailsRepository
 * Sert à simuler un stockage de cocktails en mémoire.
 */
class CategoriesRepository {

	public function findAll() {



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

    // Retourne le tableau des cocktails
    return $categories;

    }

    public function findOneById($id) {

        $categories = $this->findAll();
        $category = $categories[$id];

        return $category;

    }
}