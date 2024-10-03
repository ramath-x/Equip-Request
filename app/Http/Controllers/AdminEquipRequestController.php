<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Equipment;
use Illuminate\Http\Request;

class AdminEquipRequestController extends Controller
{
    function index()
    {
        $categories = Category::all();
        return view('form-input-request', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
        ]);

        // สร้างข้อมูลอุปกรณ์ใหม่
        Equipment::create($request->all());

        return redirect()->back()->with('success', 'อุปกรณ์ถูกเพิ่มเรียบร้อยแล้ว!');
    }
}
