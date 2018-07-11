<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantsController extends Controller
{
     public function index()
    {
        $restaurants = Restaurants::all();

        return view('contents.store', [
            'restaurants' => $restaurants,
        ]);
    }
}
