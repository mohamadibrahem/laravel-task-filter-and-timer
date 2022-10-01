<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
 
class ApiController extends Controller
{
    public function get_all_cats(Request $request){
        $url = 'https://staging.mazaady.com/api/get_all_cats';
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->get($url);        
        return response()->json(json_decode($response));
    }

    public function properties(Request $request)
    {
        $request->validate([
            'cat' => 'required'
        ]);
        
        $url = 'https://staging.mazaady.com/api/properties?cat='.$request->cat;
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->get($url);        
        return response()->json(json_decode($response));
    }

    public function get_options_child(Request $request,$id)
    {
        $url = 'https://staging.mazaady.com/api/get-options-child/'.$id;
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->get($url);        
        return response()->json(json_decode($response));
    }
}
