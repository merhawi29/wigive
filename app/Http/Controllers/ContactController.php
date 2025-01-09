<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('Contact');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        dd($request->all());
        return redirect()->route('Contact.index')->with('message', 'We have received your message and would like to thank you for writing to us.');
    }
}
