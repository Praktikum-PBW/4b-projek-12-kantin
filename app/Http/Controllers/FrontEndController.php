<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\dish;

class FrontEndController extends Controller
{
    public function index(){
        $dishes = Dish::where('dish_status', 1)->get();
        return view('FrontEnd.include.home', compact('dishes'));
    }
    public function dish_show($id){
        $categoryDish = Dish::where('category_id', $id)
                            ->where('dish_status', 1)
                            ->get();
        return view('FrontEnd.include.dish', compact('categoryDish'));
    }
}
