<?php
/**
 * Created by PhpStorm.
 * User: aogaga
 * Date: 5/26/18
 * Time: 4:20 PM
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class ArticleController extends AbstractController
{

    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response('welcome to our new homepage');
    }


    /**
     * @Route("/news/{slug}")
     */
    public function show($slug){
       // return new Response(sprintf('future page to show the article: %s ', $slug));
        $comments = [
            'I ate a normal rock one. It did not taste like bacon !',
            'wooh! i\'m going on an all-steroid diet',
            'I like bacon too! Buy some from my site! bakinsomebacon.com'
        ];
        return $this->render('article/show.html.twig',
            ['title'=> ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments]);
    }
}