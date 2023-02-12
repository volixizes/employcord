<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalEmployees = Employee::count();
        $announcements = Announcement::orderBy('created_at', 'desc')->simplePaginate(3);
        
        return view('home')->with('announcements', $announcements)
                            ->with('totalEmployees', $totalEmployees);

    }

    // public function headcount()
    // {
    //     $totalEmployees = Employee::count();

    //     return view('home', compact('totalEmployees'));
    // }
}

