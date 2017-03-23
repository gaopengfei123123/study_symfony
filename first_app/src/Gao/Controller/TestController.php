<?php

/**
 * Created by PhpStorm.
 * User: gaopengfei
 * Date: 2017/3/23
 * Time: 下午7:15
 */
namespace Gao\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class TestController extends Controller
{
    /**
     * @Route("/test")
     */
    public function helloAction(){
        return new Response('hello test gao bundle');
    }

}