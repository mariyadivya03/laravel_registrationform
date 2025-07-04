<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Registration;
use Illuminate\Support\Facades\Storage;

class RegistrationController extends Controller {
    function create() {
        return view('register');
    }

    function store(Request $r) {
        $r->validate([
            'Email' => 'required|unique:registrations',
            'Password' => 'required|min:6'
        ]);

        $file = $r->file('resume');
        $resume = $file ? $file->storeAs('resumes', time().'_'.$file->getClientOriginalName(), 'public') : null;

        Registration::create([
            'FirstName' => $r->FirstName,
            'LastName' => $r->LastName,
            'Gender' => $r->Gender,
            'Email' => $r->Email,
            'Password' => Hash::make($r->Password),
            'PhoneNo' => $r->PhoneNo,
            'Course' => $r->Course,
            'Languages' => implode(',', $r->Languages ?? []),
            'Resume' => $resume
        ]);

        return redirect('/login');
    }

    function loginForm() {
        return view('login');
    }

    function login(Request $r) {
        $user = Registration::where('Email', $r->email)->first();
        if ($user && Hash::check($r->password, $user->Password)) {
            session(['user' => $user]);
            return redirect('/list');
        }
        return back()->with('error', 'Invalid credentials');
    }

    function index() {
        if (!session('user')) return redirect('/login');
        return view('list', ['data' => Registration::all()]);
    }

    function edit($id) {
        return view('edit', ['user' => Registration::findOrFail($id)]);
    }

    function update(Request $r, $id) {
        $user = Registration::findOrFail($id);
        $user->update($r->except('_token'));
        return redirect('/list');
    }

    function destroy($id) {
        Registration::destroy($id);
        return redirect('/list');
    }

    function logout() {
        session()->forget('user');
        return redirect('/login');
    }
}
