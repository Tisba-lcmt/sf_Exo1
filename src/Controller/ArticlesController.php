<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
    /**
     * @Route("/articles", name="articles_list")
     */

    public function articlesList()
    {
        // Je créé une variable qui contient la constance ARTICLES de la classe
        // PagesController
        $articles = PagesController::ARTICLES;

        return $this->render('articles.html.twig', [
            'articles' => $articles
        ]);

    }

    /**
     * @Route("/article/{id}", name="article_show")
     */

    public function articleShow($id)
    {
        $articles = PagesController::ARTICLES;

        return $this->render('article.html.twig', [
            'article'=>$articles[$id]
        ]);
    }
}