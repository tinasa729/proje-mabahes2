<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestBooks;

class RequestBooksController extends Controller
{
    //
    public function index()
    {
        return view('home.RequestBook');
    }
    public function store(Request $request)
    {
        //$user_id=auth()->user()->id;
        $validData = $request->validate([
            'name' => 'required',
        ]);
        //dd($validData);
        $product = auth()->user()->requestbooks()->create($validData);
        return back();
    }
}
