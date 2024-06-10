<?php

namespace Bachv\Asm2Oop\Controllers\Client;

use Bachv\Asm2Oop\Commons\Controller;
use Bachv\Asm2Oop\Commons\Helper;
use Bachv\Asm2Oop\Models\Product;

class HomeController extends Controller
{

    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function index()
    {
        $products = $this->product->all();
        // Helper::debug($products);
        $name = 'BachvtPH';

        $this->renderViewClient('home',[
            'name' => $name,
            'products' => $products,
        ]);
    }
}
