<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClientController extends AbstractController
{
    public function getClients () {
        $clients = [
            [
                'id' => 1,
                'name' => 'Darya',
                'phone' => '+79782342613',
                'address' => 'Lenina 47'
            ],
            [
                'id' => 2,
                'name' => 'Stepan',
                'phone' => '+79787327234',
                'address' => 'Lenina 46'
            ],
            [
                'id' => 3,
                'name' => 'Gregor',
                'phone' => '+89883627628',
                'address' => 'Lenina 42A'
            ]
        ];
        return $this->json($clients);
    }

    public function getClient ($id) {
        $client = [
            'id' => $id,
            'name' => 'Gregor',
            'phone' => '+89883627628',
            'address' => 'Lenina 42A'
        ];
        return $this->json($client);
    }

    public function createClient () {
        return $this->json('Client has been created');
    }

    public function patchClient ($id) {
        return $this->json('Client has been updated');
    }

    public function deleteClient ($id) {
        return $this->json('Client has been deleted');
    }
}
