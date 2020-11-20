<?php


namespace App\Controller;


use App\Services\ArticlesHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{

    /**
     * @Route("/articles", name="articles_list")
     */

    public function articlesList()
    {
        $ArticlesHelper = new ArticlesHelper();

        return $this->render('articles.html.twig', [
            'articles' => $ArticlesHelper->articles
        ]);

    }

    /**
     * @Route("/article/{id}", name="article_show")
     */

    public function articleShow($id)
    {
        $ArticlesHelper = new ArticlesHelper();

        // Le deuxième paramètre de la méthode render() est la variable qui contient avec
        // leurs wildcards id associées récupérées dans le tableau des articles de la classe ArticlesHelper
        return $this->render('article.html.twig', [
            'article'=>$ArticlesHelper->articles[$id]
        ]);
    }
}