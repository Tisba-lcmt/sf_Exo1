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

        // Je créé une variable qui contient la constance ARTICLES de la classe
        // PagesController
        $articles = ArticlesHelper::ARTICLES;

        return $this->render('articles.html.twig', [
            'articles' => $articles
        ]);

    }

    /**
     * @Route("/article/{id}", name="article_show")
     */

    public function articleShow($id)
    {
        $articles = ArticlesHelper::ARTICLES;

        return $this->render('article.html.twig', [
            'article'=>$articles[$id]
        ]);
    }
}