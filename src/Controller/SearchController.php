<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DomCrawler\Field\TextareaFormField;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    /**
     * @Route("/search", name="search")
     */
    public function index(): Response
    {
        return $this->render('search/index.html.twig', [
            'controller_name' => 'SearchController',
        ]);
    }

    public function searchBar(){
        $form = $this->createFormBuilder(null)
            ->add('req', SearchType::class,[
                    'label' => false
            ])
            ->add('search', SubmitType::class,[
                'attr' => [
                    'class' => 'btn btn-primary '
                ]
            ]
            )
            ->getForm();
        return $this->render('search/searchBar.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function searchProduct($str){
        $result = [];
        $header = array("Content-Type" => "application/json");

        $req = "{\"query\": { \"match\": {\"product\": \"$str\"}}}";

        $result = $this->callAPI("GET", "localhost\api PORT", $header, $req);

        $obj = json_decode($result);
        $temp = $obj->hits->hits;
        if($temp && is_array($temp) && sizeof($temp)){
            foreach ($temp as $item){
                $res[] = new Product($item->id,
                    $item->_source->name,
                    $item->_source->price,
                    $item->_source->description
                );
            }
        }
        return $res;

    }

    function callAPI($method, $url, $headers = false, $data = false)
    {
        $curl = curl_init();
        switch ($method) {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_PUT, 1);
                break;
            case "GET":
                curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, 'GET' );
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }
        // Optional Authentication:
        //curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        //curl_setopt($curl, CURLOPT_USERPWD, "username:password");
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
    }
}
