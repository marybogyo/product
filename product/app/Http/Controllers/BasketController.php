<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    //
    public function index(){
        
        return Basket::all();
    }

    public function show($id){
        return Basket::findOrFail($id);
    }

    public function store(Request $request){
        $basket = new Basket();
        $basket->item_id = $request->input('item_id');
        $basket->user_id = $request->input('user_id');
        $basket->save();
    }

    public function update(Request $request, $id){
        $basket = Basket::findOrFail($id);
        $basket->item_id = $request->input('item_id');
        $basket->user_id = $request->input('user_id');
        $basket->save();
    }

    public function destroy($id){
        Basket::findOrFail($id)->delete();
    }

}
