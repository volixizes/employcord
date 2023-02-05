<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function create(Request $request)
    {

        $employees = new Employee;
        $employees->first_name = $request->first_name;
        $employees->middle_name = $request->middle_name;
        $employees->last_name= $request->last_name;
        $employees->birthday = $request->birthday;
        $employees->gender = $request->gender;
        $employees->marital_status = $request->marital_status;
        $employees->contact_no = $request->contact_no;
        $employees->street = $request->street;
        $employees->barangay = $request->barangay;
        $employees->city = $request->city;
        $employees->province = $request->province;
        $employees->date_hire = $request->date_hire;
        $employees->employment_status = $request->employment_status;
        $employees->isActive = $request->isActive;
        $employees->Job_Title = $request->Job_Title;
        $employees->isResigned = $request->isResigned;
        $employees->rank = $request->rank;
        $employees->department = $request->department;
        $employees->email = $request->email;
        $employees->password = $request->password;
        $employees->save();
        
        // $validatedData = $request->validate([
        //     'first_name' => 'required|string|max:255',
        //     'middle_name' => 'required|string|max:255',
        //     'last_name' => 'required|string|max:255',
        //     'birthday' => 'required|date',
        //     'gender' => 'required|string',
        //     'marital_status' => 'required|string' ,
        //     'contact_no' => 'required|integer' ,
        //     'street' => 'required|integer' ,
        //     'barangay' => 'required|string|max:255' ,
        //     'city' => 'required|string|max:255',
        //     'province' => 'required|string|max:255',
        //     'date_hire' => 'required|date',
        //     'employment_status' => 'required|string' ,
        //     'isActive' => 'required|string' ,
        //     'Job_Title' => 'required|string|max:255' ,
        //     'isResigned' => 'required|date' ,
        //     'rank' => 'required|string|max:255' ,
        //     'department'=> 'required|string|max:255' ,
        //     'email' => 'required|string|max:255|unique:users' ,
        //     'password' => 'required|string|max:255|unique:users' ,

        // ]);
       

        // paroute sir kung saan
        return redirect()->route('employees')->with('success', 'New employee added!');
    }

}
