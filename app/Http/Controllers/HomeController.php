<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Company;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
public function Home(){
    $comments=Comment::take(3);
    $products=Product::all();
    $companies=Company::all();
    return view('contacts.home', compact('comments', 'products', 'companies'));
}

}
