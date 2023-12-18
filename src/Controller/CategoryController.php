<?php

namespace App\src\Controller;

use App\src\Controller\TwigController;
use App\src\Entity\Category;

class CategoryController extends TwigController
{

    public function index()
    {
        $category = new Category;
        $tabCategory = $category->getAllListCategory();
        echo $this->twig->render('category/index.html.twig', [
            'tabCategory' => $tabCategory,
            'session' => $_SESSION
        ]);
    }
}
