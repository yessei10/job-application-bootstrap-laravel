<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jobapp_Controller extends Controller
{
    public function form() {
        return view('jobappform');
    }

    public function submit(Request $request) {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $resume = $request->input('resume');
        $address = $request->input('address');
        $cover = $request->input('cover');
        $position = $request->input('position');
        $salary = $request->input('salary');
        
        return view('result', compact('firstname', 'lastname', 'email', 'phone', 'resume', 'address', 'cover', 'position', 'salary')); 
    }

}
