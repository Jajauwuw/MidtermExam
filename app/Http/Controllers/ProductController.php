<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
public function index(Request $request)
{
$theme = $request->input('theme', 'gadgets');

$products = [
    'gadgets' => [
    'iPhone 12',
    'Samsung Galaxy S21',
    'Google Pixel 5',
    ],
    'anime' => [
    'Attack on Titan',
    'One Punch Man',
    'Naruto',
    ],
    ];
    
    return view('products.index', [
    'theme' => $theme,
    'products' => $products[$theme],
    ]);
    }
    }