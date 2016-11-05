<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class IndexController extends Controller
{
    public function index(){
        $header = "Hello World";
        $product = Product::getAllProducts();
        return view("page")->with(["header"=>$header,"product"=>$product]);
    }
}
