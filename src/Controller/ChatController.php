<?php

namespace App\Controller;

use App\Service\HttpClientApiOpenAi;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class ChatController extends AbstractController
{
    public HttpClientApiOpenAi $client;
    public function __construct(HttpClientApiOpenAi $client,)
    {
        $this->client= $client;
    }

    #[Route('/', name: 'index.home')]
    public function index($client): Response
    {
        return $this->render('chat/index.html.twig', [
            'controller_name' => 'ChatController',
            'client'=>$client->fetchGitHubInformation()

        ]);
    }
}
