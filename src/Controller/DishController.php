<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DishController extends AbstractController
{
    public function getDishesByRestaurantId($restaurantId)
    {
        $dishes = [
            [
                'id' => 1,
                'name' => 'Potato',
                'description' => 'Tasty',
                'price' => 89.99,
                'restaurant' => [
                    'id' => $restaurantId,
                    'name' => 'McDonalds',
                    'description' => 'Luxurious restaurant',
                ],
            ],
            [
                'id' => 2,
                'name' => 'Meat',
                'description' => 'Tasty',
                'price' => 199.99,
                'restaurant' => [
                    'id' => $restaurantId,
                    'name' => 'McDonalds',
                    'description' => 'Luxurious restaurant',
                ],
            ],
            [
                'id' => 3,
                'name' => 'Burger',
                'description' => 'Tasty',
                'price' => 890.99,
                'restaurant' => [
                    'id' => $restaurantId,
                    'name' => 'McDonalds',
                    'description' => 'Luxurious restaurant',
                ],
            ]
        ];
        return $this->json($dishes);
    }

    public function getDish($id)
    {
        $dish = [
            'id' => $id,
            'name' => 'Potato',
            'description' => 'Tasty',
            'price' => 89.99,
            'restaurant' => [
                'id' => 1,
                'name' => 'McDonalds',
                'description' => 'Luxurious restaurant',
            ],
        ];
        return $this->json($dish);
    }

    public function createDish()
    {
        return $this->json('Dish has been created');
    }

    public function patchDish($id)
    {
        return $this->json('Dish has been updated');
    }

    public function deleteDish($id)
    {
        return $this->json('Dish has been deleted');
    }
}
