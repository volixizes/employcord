<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function create(Request $request)
    {
        // try {
            $contactValue = "+63";
            $employees = new Employee;
            $employees->first_name = $request->first_name;
            $employees->middle_name = $request->middle_name;
            $employees->last_name= $request->last_name;
            $employees->birthday = $request->birthday;
            $employees->gender = $request->gender;
            $employees->marital_status = $request->marital_status;
            $employees->contact_no = $contactValue . $request->contact_no;
            $employees->street = $request->street;
            $employees->barangay = $request->barangay;
            $employees->city = $request->city;
            $employees->province = $request->province;
            $employees->date_hire = $request->date_hire;
            $employees->employment_status = $request->employment_status;
            $employees->isActive = $request->isActive;
            $employees->Job_Title = $request->Job_Title;
            if ($request->isActive === "Active") {
                $employees->isResigned = null;
            } else {
                $employees->isResigned = $request->isResigned;
            }
            $employees->rank = $request->rank;
            $employees->department = $request->department;
            $employees->email = $request->email;
            $employees->password = $request->password;
            $employees->save();

            $employee_login = [
                'employee_id' => $request->id,
                'name' => $request->first_name ." ". $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ];

            DB::table('users')->insert($employee_login);
            DB::commit();
    
            return redirect()->route('employees')->with('success', 'New employees added!');
        // } catch (\Illuminate\Database\QueryException $ex) {
        //     if ($ex->errorInfo[1] == 1062) {
        //         return redirect()->back()->withInput($request->all())->with('error', 'Email address already exists.');
        //     }
        // }
     }

}
