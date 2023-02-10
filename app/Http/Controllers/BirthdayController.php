<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class BirthdayController extends Controller
{
    public function index()
    {
        $employees = Employee::all()->whereMonth('birthday', '=', date('m'));

        return view('home', compact('employee'));
        // return redirect()->route('home')->with('success', 'New announcement has been posted');
    }
}
