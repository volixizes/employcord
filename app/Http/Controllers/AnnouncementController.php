<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class AnnouncementController extends Controller
{
    public function store(Request $request)
    {
        Announcement::create($request->all());
        session()->flash('announcement', 'Announcement posted');
        return redirect()->route('home');
    }
}
