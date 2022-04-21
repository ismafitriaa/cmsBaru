<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // public function index(){
    //     return 'Hi! Selamat Datang di Website Laravel';
    // }
    // public function index(){
    //     return view('home', ['posts'=>Post::index()]);
    // }
    
    public function home()
    {
       return view('index');
    }

    public function index()
    {
        $user = Auth::user();
        return view('dashboard',['user' => $user]);
    }
}
