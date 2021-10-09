<?php

namespace App\Http\Controllers;


class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
        // auth()->logout();
        // return redirect('/')->with('success', 'Goodbye!');
    }

    public function store()
    {
       $attributes = request()->validate([
            'email' =>['required'],
            'password' =>['required']
        ]);

        if (auth()->attempt($attributes)){
            return redirect('/')->with('success','You are logged in');
        }

        return back()
        ->withInput()
        ->withErrors(['email' => 'Your provided credentials could not be verified']);
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye!');
    }
}

