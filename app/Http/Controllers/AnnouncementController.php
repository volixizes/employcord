<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class AnnouncementController extends Controller
{
    public function store(Request $request)
    {
        $announcement = new Announcement();
        $announcement->announcement = $request->input('announcement');
        $announcement->save();
        return view('home', ['announcements'=>$announcement]);        
    }
}
