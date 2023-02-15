<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Image;

class ImageController extends Controller
{
    public function store(Request $request, $id)
    {
        $employee = Employee::find($id);
        $file = $request->file('image');

        if($request->hasFile('image')){
            $request->validate([
                'image' => 'required|image|mimes:pdf,jpeg,jpg,png,gif|max:2048',
            ]);

        $filename = time().".".$file->getClientOriginalExtension();
        
        Storage::putFileAs('public/images',$file, $filename);
        $image = new Image(['filename' => $filename]);
        $employee->images()->save($image);
        return redirect()->back();
    }
}
}