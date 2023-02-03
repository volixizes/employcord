<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class AnnouncementController extends Controller
{
    public function create(){
        return view('announcements.create');
    }

    public function store(Request $request){
        Announcement::create($request->all());
            return redirect()->route('announcements.home');
    }
}
