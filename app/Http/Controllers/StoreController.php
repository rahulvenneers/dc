<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emirate;
use App\Store;

class StoreController extends Controller
{
    public function create(Emirate $emirate)
    {
        echo $emirate->name;
        return view('store.form',['emirates'=>$emirate]);
    }
    public function store(Request $request)
    {
         $this->validate($request, [
        'store_name' => 'required',
        'addr_line1' => 'required'
    ]);

    $input = $request->all();

    Store::create($input);

    Session::flash('flash_message', 'Task successfully added!');

    return redirect()->back();
    }
}
