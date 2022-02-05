<?php

namespace App\Controller;

use Enqueue\Client\ProducerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProducerController extends AbstractController
{
    /**
     * @Route("/producer", name="producer_demo")
     */
    public function index(ProducerInterface $producer): Response
    {
        $producer->sendEvent("test_topic", ["my" => "message"]);

        return new Response("Message sent");
    }
}
