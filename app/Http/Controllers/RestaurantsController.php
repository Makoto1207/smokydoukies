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
        if($request->name=='')
        {
            //echo 'test1';
        $restaurants = \App\Restaurants::all();

        return view('contents.store', [
            'restaurants' => $restaurants,
        ]);
        }
        
        
        
        else{

        //echo 'test2';
        $restaurants = \App\Restaurants::where('name','LIKE','%'.$request->word.'%')->get();
                    echo $request->name;

        return view('contents.store', [
            'restaurants' => $restaurants,
        ]);   
        }
    }
   
}
