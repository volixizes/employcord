<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function create(Request $request)
    {
        $announcement = new Announcement;
        $announcement->message = $request->message;
        $announcement->user_id = $request->user_id;
        $announcement->save();

        return redirect()->route('home')->with('success', 'New announcement has been posted');
    }
}