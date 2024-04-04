<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\Update;

class BotController extends AbstractController
{
    #[Route('/bot', name: 'app_bot', methods: ['POST'])]
    public function index(BotApi $api, Update $update): Response
    {
        $text = $update->getMessage()->getText();
        $newText = sprintf('Message:\n %s', $text);
        $api->sendMessage($update->getMessage()->getChat()->getId(),$text);
        return $this->render('bot/index.html.twig', [
            'controller_name' => 'BotController',
        ]);
    }
}
