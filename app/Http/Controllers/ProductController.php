<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Products() {
        $data = 'The GodFather, Fast&Furuios, Mama Mia';
        return view('Products', ['Products' => $data]);
    }
}