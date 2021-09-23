<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/")
     * @Route("/{_locale}/")
     */
    public function number(): Response
    {
        return $this->render(
            'pages/index.html.twig'
        );
    }

    /**
     * @Route("/about", name="about")
     * @Route("/about/{_locale}", name="about")
     */
    public function about(): Response
    {
        return $this->render(
            'pages/about.html.twig', [
            ]
        );
    }
}
