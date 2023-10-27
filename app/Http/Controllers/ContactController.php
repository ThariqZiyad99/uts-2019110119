<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'id' => 'required|string|min:3|max:255',
            'amount' => 'required|string|email',
            'type' => 'required|numeric|digits_between:5,15',
            'category' => 'required|numeric|digits_between:5,15',
            'notes' => 'required|numeric|digits_between:5,15',
        ]);
        dump($validated);

    }

}

