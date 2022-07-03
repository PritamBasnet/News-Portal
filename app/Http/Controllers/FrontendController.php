<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class FrontendController extends Controller
{
    public function menu($id){
        $take = $id;
        return view('frontend.category',compact('take'));
    }
    // Making an function for the detail page
    public function detailPage($slug){
        $detail = post::where('slug',$slug)->first();
        return view('frontend.detail',compact('detail'));
    }
}
