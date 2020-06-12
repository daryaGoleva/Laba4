<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OrderController extends AbstractController
{
    public function getOrdersByClientId($clientId)
    {
        $orders = [
            [
                'id' => 1,
                'client' => [
                    'id' => $clientId,
                    'name' => 'Gregor',
                    'phone' => '+89883627628',
                    'address' => 'Lenina 42A'
                ],
                'dishes' => [
                    [
                        'id' => 1,
                        'name' => 'Potato',
                        'description' => 'Tasty',
                        'price' => 89.99,
                        'restaurant' => [
                            'id' => 2,
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
                            'id' => 2,
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
                            'id' => 2,
                            'name' => 'McDonalds',
                            'description' => 'Luxurious restaurant',
                        ],
                    ]
                ]
            ]
        ];
        return $this->json($orders);
    }

    public function getOrder($id)
    {
       $order = [
            [
                'id' => $id,
                'client' => [
                    'id' => 3,
                    'name' => 'Gregor',
                    'phone' => '+89883627628',
                    'address' => 'Lenina 42A'
                ],
                'dishes' => [
                    [
                        'id' => 1,
                        'name' => 'Potato',
                        'description' => 'Tasty',
                        'price' => 89.99,
                        'restaurant' => [
                            'id' => 2,
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
                            'id' => 2,
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
                            'id' => 2,
                            'name' => 'McDonalds',
                            'description' => 'Luxurious restaurant',
                        ],
                    ]
                ]
            ]
        ];
        return $this->json($order);
    }

    public function createOrder()
    {
        return $this->json('Order has been created');
    }

    public function patchOrder($id)
    {
        return $this->json('Order has been updated');
    }

    public function deleteOrder($id)
    {
        return $this->json('Order has been deleted');
    }
}
