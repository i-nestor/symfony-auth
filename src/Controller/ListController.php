<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractController {
    
    /**
     * @Route("/list", name="list")
     */
    public function index(Request $request): Response {

        $cryptocurrencies = [
            'Bitcoin (BTC)' => '40000$',
            'Ethereum (ETH)' => '2500$',
            'Terra (LUNA)' => '90$',
            'Cardano (ADA)' => '0.8$',
            'Solana (SOL)' => '80$',
            'Polkadot (DOT)' => '18$',
            'Dogecoin (DOGE)' => '0.1$',
            'Polygon (MATIC)' => '11$',
            'Cosmos (ATOM)' => '27$',
            'Litecoin (LTC)' => '104$',
            'NEAR Protocol (NEAR)' => '10$',
            'Monero (XMR)' => '180$',
            'Tezos (XTZ)' => '3$',
        ];

        return $this->render('list/index.html.twig', [
          //  'controller_name' => 'ListController',
            'cryptocurrencies' => $cryptocurrencies,
        ]);

    }
}
