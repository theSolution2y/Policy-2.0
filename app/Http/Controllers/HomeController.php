<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = Category::all();
        return view('all', ['cat'=>$cat]);
    }
}
