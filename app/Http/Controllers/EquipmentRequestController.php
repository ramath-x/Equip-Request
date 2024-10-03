<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\EquipmentRequest;

class EquipmentRequestController extends Controller
{
    //
    public function create()
    {
        // ดึงรายการอุปกรณ์และหมวดหมู่มาแสดงในฟอร์ม
        $categories = Category::with('equipment')->get();
        return view('form-input-request', compact('categories'));
    }

    public function store(Request $request)
    {
        // ตรวจสอบข้อมูลจากฟอร์ม
        $validated = $request->validate([
            'equipment.*.type' => 'required|exists:equipment,type',
            'equipment.*.quantity' => 'required|integer|min:1',
        ]);

        // บันทึกรายการอุปกรณ์ที่ผู้ใช้ร้องขอ
        foreach ($validated['equipment'] as $item) {
            EquipmentRequest::create([
                'user_id' => auth()->user()->id, // ใช้ข้อมูล user_id จากผู้ใช้ที่ล็อกอินอยู่
                'equipment_id' => $item['type'],
                'quantity' => $item['quantity'],
            ]);
        }

        return redirect()->back()->with('success', 'บันทึกข้อมูลสำเร็จ');
    }
    
}
