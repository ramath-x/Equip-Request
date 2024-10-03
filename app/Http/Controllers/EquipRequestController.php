<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipRequestController extends Controller
{
    //
    function index()
    {
        return view('form-input-request');
    }
}
