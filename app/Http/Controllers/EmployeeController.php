<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'gender' => 'required|string',
            'marital_status' => 'required|string' ,
            'contact_no' => 'required|integer' ,
            'street' => 'required|integer' ,
            'barangay' => 'required|string|max:255' ,
            'city' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'date_hire' => 'required|date',
            'employment_status' => 'required|string' ,
            'isActive' => 'required|string' ,
            'Job_Title' => 'required|string|max:255' ,
            'isResigned' => 'required|date' ,
            'rank' => 'required|string|max:255' ,
            'department'=> 'required|string|max:255' ,
            'email' => 'required|string|max:255|unique:users' ,
            'password' => 'required|string|max:255|unique:users' ,

        ]);
        $employees = new Employee;
        $employees->first_name = $validatedData['first_name'];
        $employees->middle_name = $validatedData['middle_name'];
        $employees->last_name= $validatedData['last_name'];
        $employees->birthday = $validatedData['birthday'];
        $employees->gender = $validatedData['gender'];
        $employees->marital_status = $validatedData['marital_status'];
        $employees->contact_no = $validatedData['contact_no'];
        $employees->street = $validatedData['street'];
        $employees->barangay = $validatedData['barangay'];
        $employees->city = $validatedData['city'];
        $employees->province = $validatedData['province'];
        $employees->employment_status = $validatedData['employment_status'];
        $employees->isActive = $validatedData['isActive'];
        $employees->Job_Title = $validatedData['Job_Title'];
        $employees->isResigned = $validatedData['isResigned'];
        $employees->rank = $validatedData['rank'];
        $employees->department = $validatedData['department'];
        $employees->email = $validatedData['email'];
        $employees->password = $validatedData['password'];
        $employees->save();
        // paroute sir kung saan
        return redirect()->route('index')->with('success', 'New member added!');
    }

}
