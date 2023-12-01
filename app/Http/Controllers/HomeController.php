<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        $initialMarkers = [
            [
                'position' => [
                    'lat' => 17.769910132160778,
                    'lng' => 78.62117428835806
                ],
                'draggable' => true
            ]
        ];
        return view('home', compact('initialMarkers'));
    }
}
