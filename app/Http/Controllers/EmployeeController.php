<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{

    

    public function create(Request $request)
    {   
        $emp_id = Employee::all();

        // try {
            DB::beginTransaction();
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
                'name' => $request->first_name ." ". $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'created_at' => now(),
                'employee_id' => $employees->id,
                'isAdmin' => 0
            ];
            DB::table('users')->insert($employee_login);
            DB::commit();
    
            return redirect()->route('storeemployee');

        // } catch (\Illuminate\Database\QueryException $ex) {
        //     if ($ex->errorInfo[1] == 1062) {
        //         return redirect()->back()->withInput($request->all())->with('error', 'Email address already exists.');
        //     }
        // }
     }

     public function confirm(){

            
            $employees = Employee::all();
            return view('confirmemployee')->with('employees', $employees)
            ->with('success', 'New employees added!');
        
     }

     public function birthday(Request $request){
        // $birthdays = DB::table('employees')->select('first_name','middle_name', 'last_name', 'birthday')->get();
        $birthdays = Employee::whereBetween('birthday', [
            Carbon::now()->startOfWeek(), 
            Carbon::now()->endOfWeek()
        ])->simplePaginate(3);
        
        // $birthdays->first_name = $request->first_name;
        // $birthdays->last_name = $request->last_name;
        // $birthdays->middle_name = $request->middle_name;
        // $birthdays->birthday = $request->birthday;

        return view('home')->with('birthdays', $birthdays);
    }

        public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->first_name = $request->first_name;
        $employee->middle_name = $request->middle_name;
        $employee->last_name= $request->last_name;
        $employee->birthday = $request->birthday;
        $employee->gender = $request->gender;
        $employee->marital_status = $request->marital_status;
        $employee->contact_no = $request->contact_no;
        $employee->street = $request->street;
        $employee->barangay = $request->barangay;
        $employee->city = $request->city;
        $employee->province = $request->province;
        $employee->date_hire = $request->date_hire;
        $employee->employment_status = $request->employment_status;
        $employee->isActive = $request->isActive;
        $employee->Job_Title = $request->Job_Title;
        if ($request->isActive === "Active") {
            $employee->isResigned = null;
        } else {
            $employee->isResigned = $request->isResigned;
        }
        $employee->rank = $request->rank;
        $employee->department = $request->department;
        $employee->email = $request->email;
        $employee->password = $request->password;
        $employee->save();

        return redirect()->route('confirmemployee');
    }

}
