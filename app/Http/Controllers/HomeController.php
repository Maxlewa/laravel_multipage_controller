<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $varHome = [
            (object) [
                "image" => './img/intro.jpg',
                "titre" => "Fresh Coffee", 
                "sousTitre" => "Worth Drinking", 
                "texte" => "Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!",
                "button" => "Visit Us Today!"
            ],
            (object) [
                "titre" => "Our Promise",
                "sousTitre" => "To You",
                "texte" => "When you walk into our shop to start your day, we are dedicated to providing you with friendly service, a welcoming atmosphere, and above all else, excellent products made with the highest quality ingredients. If you are not satisfied, please let us know and we will do whatever we can to make things right!",
            ]
        ];
        return view('home', compact('varHome'));
    }
}
