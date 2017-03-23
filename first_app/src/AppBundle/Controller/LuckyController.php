<?php
/**
 * Created by PhpStorm.
 * User: gaopengfei
 * Date: 2017/3/21
 * Time: 下午7:03
 */

// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGenerator;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number")
     */
    public function numberAction()
    {
        $numbers = mt_rand(1,999);

        $html = $this->container->get('templating')->render('lucky/number.html.twig',['number'=>$numbers]);
        return new Response($html);
    }

    public function showAction($slug){
        $str = 'this is blog-'.$slug;

        return new Response($str);
    }

    public function testAction($str){
        $str = 'this is test-'.$str;

        return new Response($str);
    }

    /**
     * @Route(
     *     "/articles/{_locale}/{year}/{title}.{_format}",
     *     defaults={"_format": "html"},
     *     requirements={
     *         "_locale": "en|fr",
     *         "_format": "html|rss",
     *         "year": "\d+"
     *     }
     * )
     */
    public function articlesAction($_locale,$year,$title){
        $str = 'this is article'.$_locale.$year.$title;
//        $params = $this->get('router')->match('/blog/{slug}');
//        dump($params);
//        $uri = $this->get('router')->generate('blog_show',[
//            'slug' => 'xxx',
//            'author' => 'jack',
//            'type' => 'markdown'
//        ],UrlGenerator::ABSOLUTE_URL);
//        $uri = $this->generateUrl('blog_show');
//        dump($uri);
        $data = [
            'key' => 'value',
            'hello' => 'world',
            'number' => '2333',
            'arr' => [2,3,4]
        ];
        return $this->render('lucky/number.html.twig',$data);





        return $this->response($str);
    }


    protected function response($content){
        return new Response($content);
    }
}