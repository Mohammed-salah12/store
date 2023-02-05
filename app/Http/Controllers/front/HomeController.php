<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){
        $comments=Comment::take(3)->get();
        return view('contacts.home' , compact('comments'));
    }
}
