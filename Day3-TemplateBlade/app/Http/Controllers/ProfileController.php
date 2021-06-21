<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
   public function create() {
       return view('content.profiles.create');
   }

   public function store(Request $request) {
       $request->validate([
           'full_name' => 'required|max:255',
           'email' => 'required|unique:profiles|max:255'
       ]);

       $profile = Profile::create([
           'full_name' => $request['full_name'],
           'email' => $request['email']
       ]);

       return redirect('/profile')->with('success', 'Profile berhasil ditambahkan!');
   }

   public function index() {
       $profile = Profile::all();

       return view('content.profiles.index', compact('profile'));
   }
}
