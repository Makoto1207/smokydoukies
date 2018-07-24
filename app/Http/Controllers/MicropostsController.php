<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Http\Controllers\Controller;


// ツイートを表示するため追加
use App\Micropost;
// Add these for Searching
use App\Http\Requests;


class MicropostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];

        if (\Auth::check()) {
            $user = \Auth::user();
            $microposts = $user->microposts()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'microposts' => $microposts,
            ];
            // $data += $this->counts($user);
            
            /*　送信先を指定してる　 */
            return view('users.show', $data);
            
            
            
        }else {
            
            
            return view('welcome',$data);
        }
    }
    
     public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:191',
        ]);

        $request->user()->microposts()->create([
            'content' => $request->content,
        ]);

        return redirect()->back();
    }
    
    
    public function destroy($id)
    {
        $micropost = \App\Micropost::find($id);

        if (\Auth::id() === $micropost->user_id) {
            $micropost->delete();
        }

        return redirect()->back();
    }
    
    
    
    //タイムラインにツイートを表示するコントローラー
    
    
    public function timeline(){
        
        if(request()->name==''){
            
            $microposts = Micropost::orderBy('created_at', 'desc')->paginate(10);
        
            return view('contents.timeline', [
            'microposts' => $microposts,
        ]);
        }else{
             $microposts = DB::table('microposts')->where('content','LIKE','%'.request()->name.'%')->paginate(10);
            //  ->orwhere('name','LIKE','%'.$request->content.'%')
             
             return view('contents.timeline_search', [
            'microposts' => $microposts,
        ]);
        }
    }
    
    // public function timeline(){
        
            
    //         $microposts = Micropost::orderBy('created_at', 'desc')->paginate(10);
        
    //         return view('contents.timeline', [
    //         'microposts' => $microposts,
    //     ]);
            
    //     }
        
    
    // public function search(Request $requests){
        
    //     if($request->name==''){
            
    //         $microposts = Micropost::all();
        
    //         return view('contents.timeline', [
    //         'microposts' => $microposts,
    //     ]);
    //     }else{
    //          $microposts = \App\Micropost::where('content','LIKE','%'.$request->name.'%')->get();
    //         //  ->orwhere('name','LIKE','%'.$request->content.'%')
             
    //          return view('contents.timeline', [
    //         'microposts' => $microposts,
    //     ]);
    //     }
    // }
    
}