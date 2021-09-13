<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render(
            'pages/index.html.twig', [
                'number' => $number
            ]
        );
    }

    /**
     * @Route("/about")
     */
    public function about(): Response
    {
        return $this->render(
            'pages/about.html.twig', [
            ]
        );
    }
}
