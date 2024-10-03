<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\EquipmentRequest;
use Illuminate\Http\Request;

class EquipRequestController extends Controller
{
    //
    function index()
    {
        $user = auth()->user();
        $equiment_rqeuest = EquipmentRequest::where('user_id', $user->id)
        ->with(['equipment' => function($query){
             $query->select('id', 'name', 'category_id', 'price')->whereIn('category_id', [1,2]);

         }])
         ->get() ?? [];

         
        $category = $equiment_rqeuest->groupBy('equipment.category_id')->toArray();
        $category_id = array_keys($category);

        $equipment = Equipment::whereNotIn('category_id',$category_id)->get();

        $categories = [
            'mouse' => $equipment->where('category_id', 1)->count() ? $equipment->where('category_id', 1) : [] ,
            // เอาไว้ใช้ disble ปุ่ม
            'status_mouse' => in_array(1, $category_id),
            'keyboard' => $equipment->where('category_id', 2),
            'status_keyboard' => in_array(3, $category_id),
            'monitor' => $equipment->where('category_id', 3),
  
  ];
        
         return view('request-list', compact('category', 'categories'));
    }

    


    function create(){
    }
}
