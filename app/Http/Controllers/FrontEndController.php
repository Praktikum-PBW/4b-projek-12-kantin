<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\dish;

class FrontEndController extends Controller
{
    public function index(){
        $categories = Category::where('category_status', 1)->get();
        $dishes = Dish::where('dish_status', 1)->get();
        return view('FrontEnd.include.home', compact('categories','dishes'));
    }
}
