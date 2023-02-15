<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leave;
use Illuminate\Support\Facades\Auth;

class LeaveController extends Controller
{

    public function index()
    {
        return view('home')->with('leaves', Leave::latest()->get());
    }

    public function create(Request $request)
    {
        $employees_id = Auth::id();

        $leave = new Leave;
        $leave->datefrom        = $request->datefrom;
        $leave->dateto          = $request->dateto;
        $leave->reason          = $request->reason;
        $leave->employees_id    = $employees_id;
        $leave->save();

        return redirect('home')->with('success', 'Your leave has been requested.');;
    }
    
    
}