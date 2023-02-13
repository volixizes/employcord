<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Employee;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;

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
        
        $police = $documents->sortByDesc('created_at')->where('image_type', 'Police Clearance')->first();
        $nbi = $documents->sortByDesc('created_at')->where('image_type', 'NBI Clearance')->first();
        $brgy = $documents->sortByDesc('created_at')->where('image_type', 'Brgy. Clearance')->first();
        $clearances = collect([$police, $nbi, $brgy]) ; 
        
        $memos = $documents->sortByDesc('created_at')->where('image_type', 'Memo');
        $certificates = $documents->sortByDesc('created_at')->where('image_type', 'Cert');
        $contract = $documents->sortByDesc('created_at')->where('image_type', 'Contract')->first();
        
        return view('trackrecords')->with('employees', $employees)
                                    ->with('clearances', $clearances)
                                    ->with('memos', $memos)
                                    ->with('certs', $certificates)
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
        $document->image_name = $request->image_name;
        if($request->hasFile('image')){
            $request->validate([
                'image' => 'required|image|mimes:pdf,jpeg,jpg,png,gif|max:2048',
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
    public function view($id)
    {
        $image = Document::find($id);
        return view('view_image')->with('image', $image);
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
