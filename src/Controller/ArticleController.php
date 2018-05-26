<?php
/**
 * Created by PhpStorm.
 * User: aogaga
 * Date: 5/26/18
 * Time: 4:20 PM
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


class ArticleController
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
        return new Response(sprintf('future page to show the article: %s ', $slug));
    }
}