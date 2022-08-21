<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ContactController extends Controller
{
    public function home(){
        $users = User::all();

        return view('welcome', [
            'posts' => $users
        ]);
    }

    public function submit(Request $request){
       $validatedData = $request->validate([
            'name' => 'required|max:55',
            'email' => 'required|email|unique:users|max:100',
            'message' => 'required|string|max:140',
        ]);

$user = User::create([
    'name' => $validatedData['name'],
    'email' => $validatedData['email'],
    'message' => $validatedData['message']
]);

     return redirect()->route('home');
    } 
}
