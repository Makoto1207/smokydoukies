<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use View;
use App\Http\Controllers\Controller;

// Add this line
use App\Model;


class RestaurantsController extends Controller
{
     public function index()
    {
        $restaurants = \App\Restaurants::all();

        return view('contents.store', [
            'restaurants' => $restaurants,
        ]);
    }
    
    
}
