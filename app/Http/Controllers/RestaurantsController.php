<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use View;
use App\Http\Controllers\Controller;

// Add this line
use App\Model;

// Add these for Searching
use Illuminate\Http\Request;
use App\Http\Requests;


class RestaurantsController extends Controller
{
     public function index(Request $request)
    {
        $num=0;
        if($request->name=='')
        {
        $restaurants = \App\Restaurants::all();
        //$num=count($restaurants);
        // echo $num.PHP_EOL;
        return view('contents.store', [
            'restaurants' => $restaurants,
        ]);
        }
        
        
        
        else{
        $restaurants = \App\Restaurants::where('name','LIKE','%'.$request->name.'%')->orwhere('smoke','LIKE','%'.$request->name.'%')->orwhere('area','LIKE','%'.$request->name.'%')->get();
        // $num=count($restaurants);
        // echo $num.PHP_EOL;
                return view('contents.store', [
            'restaurants' => $restaurants,
        ]);   
        }
    }
   
}
