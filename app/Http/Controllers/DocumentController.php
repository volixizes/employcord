<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Employee;

use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function display() {
        $employees = Employee::all();
        
        $documents = Document::all();
        if ($documents->image_type)

        $image_types = Document::all();
        $contract = Document::orderBy('created_at', 'desc')->where('image_type', 'Contract')->first();
        // $clearnce =
        return view('trackrecords')->with('employees', $employees)
                                    ->with('documents', $documents)
                                    ->with('image_types', $image_types)
                                    ->with('contract', $contract);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $document = new Document;
        $document->employee_id = $request->employee_id;
        $document->expiration = $request->expiration;

        if($request->hasFile('image')){
            $request->validate([
                'image' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',
            ]);

            $image = $request->file('image');
            $name = time().".".$image->getClientOriginalExtension();
            
            // Save image in storage
            Storage::putFileAs('public/images', $image, $name);

            $document->image_path = $name;
        }
        else {
            $document->image_path = null;
        }
        
        $document->image_type = $request->type;
        $document->save();
        return redirect()->route('track-records')->with('success', "New image is uploaded!");
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(document $document)
    {
        //
    }
}
