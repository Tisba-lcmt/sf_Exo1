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

        // Simulation d'une requête en BDD qui récupère tous les articles
        // c'est un array (tableau) à index numérique
        $articles = [
            1 => [
                "id" => 1,
                "title" => "Le gouvernement a trois mois pour prouver qu’il respecte ses engagements climatiques, une première en France",
                "content" => "Le Conseil d’Etat a donné ce délai à l’exécutif pour « justifier que la trajectoire de réduction à horizon 2030 pourra être respectée ». Une décision « historique » pour les ONG.",
                "image" => "https://img.lemde.fr/2020/11/19/0/0/4928/3280/688/0/60/0/e96ba3d_883405059-000-8vg8p6.jpg"
            ],
            2 => [
                "id" => 2,
                "title" => "L’interdiction du CBD en France jugée illégale par la justice européenne",
                "content" => "La décision de justice conclut que cette molécule présente dans le cannabis n’a « pas d’effet psychotrope ni d’effet nocif sur la santé ». Elle devrait priver de base légale de nombreux procès en France.",
                "image" => "https://img.lemde.fr/2017/05/24/0/613/3388/2258/576/0/60/0/9ca5088_32700-2nml3k.24wet2csor.jpg"
            ],
            3 => [
                "id" => 3,
                "title" => "« L’être humain n’accepte plus d’être malade »",
                "content" => "Rappelant que « le vivant est avant tout incertitude », le neurobiologiste Guy Simonnet souligne qu’une « tolérance zéro maladie » ne peut qu’être la source d’une nouvelle vulnérabilité.",
                "image" => "https://img.lemde.fr/2020/10/26/0/0/6720/4480/688/0/60/0/43a047a_363445842-201021jbalague-lemonde-covid-bichat-soins-29.jpg"
            ],
            4 => [
                "id" => 4,
                "title" => "Le gouvernement a trois mois pour prouver qu’il respecte ses engagements climatiques, une première en France",
                "content" => "Le Conseil d’Etat a donné ce délai à l’exécutif pour « justifier que la trajectoire de réduction à horizon 2030 pourra être respectée ». Une décision « historique » pour les ONG.",
                "image" => "https://img.lemde.fr/2020/11/19/0/0/4928/3280/688/0/60/0/e96ba3d_883405059-000-8vg8p6.jpg"
            ],
            5 => [
                "id" => 5,
                "title" => "Des « coupures très courtes » d’électricité pourraient avoir lieu cet hiver en France",
                "content" => "Le réseau de transport d’électricité assure disposer de leviers pour éviter des coupures, mais appelle chacun à adopter des gestes d’économies d’énergie.",
                "image" => "https://img.lemde.fr/2020/11/19/0/0/5184/3456/688/0/60/0/05ce9ea_162988352-000-1uw2ar.jpg"
            ],
        ];

        $articles_slice = array_slice($articles, 2, 3);

        // J'utilise la méthode render propre à la classe AbstractController
        // qui va chercher mon fichier .html.twig (dans le dossier templates)
        // puis le compiler en HTML et le renvoyer en tant que réponse HTTP

        return $this->render('home.html.twig', [
            'articles'=>$articles_slice
        ]);
    }
}