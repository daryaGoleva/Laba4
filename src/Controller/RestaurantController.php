<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RestaurantController extends AbstractController
{
    public function getRestaurants () {
        $restaurants = [
            [
                'id' => 1,
                'name' => 'McDonalds',
                'description' => 'Luxurious restaurant',
            ],
            [
                'id' => 2,
                'name' => 'KFC',
                'description' => 'Elite restaurant',
            ],
            [
                'id' => 3,
                'name' => 'Burger King',
                'description' => 'Fast-food restaurant',
            ]
        ];
        return $this->json($restaurants);
    }

    public function getRestaurant ($id) {
        $restaurant = [
            'id' => $id,
            'name' => 'KFC',
            'description' => 'Elite restaurant',
        ];
        return $this->json($restaurant);
    }

    public function createRestaurant () {
        return $this->json('Restaurant has been created');
    }

    public function patchRestaurant ($id) {
        return $this->json('Restaurant has been updated');
    }

    public function deleteRestaurant ($id) {
        return $this->json('Restaurant has been deleted');
    }
}
