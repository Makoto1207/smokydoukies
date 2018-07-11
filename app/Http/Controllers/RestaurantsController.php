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
    
    public function getIndex()
    {
        // 検索するテキスト取得
        $search = Request::get('s');
        $query = Autumn2016::query();
        // 検索するテキストが入力されている場合のみ
        if(!empty($search)) {
            $query->where('title', 'like', '%'.$search.'%');
        }
        $data = $query->get();
        return view('search.index', compact('data', 'search'));
    }
}
