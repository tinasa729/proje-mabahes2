<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RequestBooks;
use phplusir\smsir\Smsir;

class RequestBooksController extends Controller
{
    //
    public function index(){
        $books = RequestBooks::query();

        if($keyword = request('search')) {
            $books->where('title' , 'LIKE' , "%{$keyword}%")->orWhere('id' , 'LIKE' , "%{$keyword}%" );
        }

        $books = $books->latest()->paginate(20);
        return view('admin.request.all' , compact('books'));
    }
    public function update(RequestBooks $requestbook)
    {
        $user_phone=auth()->user()->phone_number;
        Smsir::send(['کاربر عزیز با کتاب درخواستی شما موافقت شد  و بزودی در سایت قرار میگیرد '],[$user_phone]);
        $requestbook->update([$requestbook->status = 'confirm']);
        return back();
    }
    public function destroy(RequestBooks $requestbook)
    {
        $user_phone=auth()->user()->phone_number;
        Smsir::send(['کاربر عزیز متاسفانه امکان فراهم کردن کتاب درخواستی شما نیست  '],[$user_phone]);
        $requestbook->delete();
        return back();
    }
}
