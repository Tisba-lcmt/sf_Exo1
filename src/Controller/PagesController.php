<?php

// J'indique le chemin de ma classe PagesController.
namespace App\Controller;

// J'indique le chemin jusqu'à la classe AbstractController et ses méthodes.
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


// J'indique le chemin de ma class Route qui se positionne dans l'Annotation de ma class PagesController.
use Symfony\Component\Routing\Annotation\Route;

// Je créé une classe PagesController suffixée par le mot "Controller"
// Elle a le même nom que mon fichier .php en format CamelCase sinon j'aurais l'erreur suivante :
// "Cannot declare class App\Controller\PageController, because the name is already in use".

// J'étends la classe AbstractController de Symfony pour bénéficier des méthodes qui sont définies à l'intérieur
class PagesController extends AbstractController
{
    /**
     * Cette annotation permet de créer ma route de ma page d'accueil : son URL de mon projet
     * La classe Route est appelée dans l'annotation, avec en premier parametre l'url de la route
     * à créér et en second parametre le nom de la route (qui doit être unique)
     *
     * @Route("/", name="homepage")
     */

    // J'ai créé une méthode home qui sera appelée quand l'url "/home" est appelée.
    // Elle est appelée automatiquement car la route est définie au dessus de cette méthode.
    // Elle peut être appelée extérieurement avec son nom précis.

    // La méthode home va retourner une redirection sous forme de réponse du protocole HTTP

    public function home()
    {
        // J'utilise la méthode render propre à la classe AbstractController
        // qui va chercher mon fichier .html.twig (dans le dossier templates)
        // puis le compiler en HTML et le renvoyer en tant que réponse HTTP

        return $this->render('home.html.twig');
    }
}