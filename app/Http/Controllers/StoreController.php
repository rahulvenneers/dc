<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function create()
    {
        return view('store.form');
    }
    public function store(StoreStores $request)
    {
        
    }
}
