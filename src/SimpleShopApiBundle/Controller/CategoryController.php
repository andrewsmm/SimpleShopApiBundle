<?php
namespace SimpleShopApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController as RestController;
use FOS\RestBundle\View\View;

class CategoryController extends RestController{

    public $_view;

    function __construct(){
        $this->_view = View::create();
    }

    public function viewResult($data){
        return $this->_view->setData(array_merge(['status'=>'ok'],$data))
            ->setStatusCode(200);
    }

    public function getCategoriesAction()
    {
        $categories = $this->getDoctrine()
            ->getManager()
            ->getRepository('SimpleShopApiBundle:Category')
            ->findAll();

        return $this->viewResult(['categories'=>$categories]);
    }

    public function getCategoryAction($id)
    {
        $category = $this->getDoctrine()
            ->getManager()
            ->getRepository('SimpleShopApiBundle:Category')
            ->findOneById($id);

        return $this->viewResult(['category'=>$category]);
    }

    
}