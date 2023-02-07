<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function create(Request $request)
    {
        $announcements = new Announcement;
        $announcements->message = $request->message;
        $announcements->user_id = $request->user_id;
        $announcements->save();

        return redirect()->route('home')->with('success', 'New announcement has been posted');
    }
}