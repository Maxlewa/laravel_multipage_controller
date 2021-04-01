<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index() {
        $varStore = [
            (object) [
                "titre" => "Come On In",
                "sousTitre" => "We're Open",
                'OpenHours' => (object) [
                    'Sun' => ['Sunday', 'Closed'], 
                    'Mon' => ['Monday', '7:00 AM to 8:00 PM'],
                    'Tue' => ['Tuesday', '7:00 AM to 8:00 PM'],
                    'Wed' => ['Wednesday', '7:00 AM to 8:00 PM'],
                    'Thu' => ['Thursday', '7:00 AM to 8:00 PM'],
                    'Fri' => ['Friday' ,'7:00 AM to 8:00 PM'],
                    'Sat' => ['Saturday' ,'7:00 AM to 8:00 PM']
                ],
                "adresseUn" => "1116 Orchard Street",
                "adresseDeux" => "Golden Valley, Minnesota",
                "callUs" => "Call Anytime",
                "telephone" => "(317) 585-8468",
            ],
            (object) [
                "image" => './img/about.jpg',
                "titre" => "Strong Coffee, Strong Roots", 
                "sousTitre" => "About Our Cafe", 
                "texteUn" => "Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.",
                "texteDeux" => "We guarantee that you will fall in lust with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time."
            ]
        ];
        return view('pages/store', compact('varStore'));
    }
}
