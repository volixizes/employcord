<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use PDF;

class EmployeeController extends Controller
{

    

    public function create(Request $request)
    {   
        $emp_id = Employee::all();

        // try {
            DB::beginTransaction();
            $contactValue                   = "+63";
            $employees                      = new Employee;
            $employees->first_name          = $request->first_name;
            $employees->middle_name         = $request->middle_name;
            $employees->last_name           = $request->last_name;
            $employees->birthday            = $request->birthday;
            $employees->gender              = $request->gender;
            $employees->marital_status      = $request->marital_status;
            $employees->contact_no          = $contactValue . $request->contact_no;
            $employees->street              = $request->street;
            $employees->barangay            = $request->barangay;
            $employees->city                = $request->city;
            $employees->province            = $request->province;
            $employees->date_hire           = $request->date_hire;
            $employees->employment_status   = $request->employment_status;
            $employees->isActive            = $request->isActive;
            $employees->Job_Title           = $request->Job_Title;
            if ($request->isActive === "Active") {
                $employees->isResigned = null;
            } else {
                $employees->isResigned      = $request->isResigned;
            }
            $employees->rank                = $request->rank;
            $employees->department          = $request->department;
            $employees->email               = $request->email;
            $employees->password            = $request->password;
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
    
            return redirect()->route('addemployee')->with('success', 'New employee has been added');

        // } catch (\Illuminate\Database\QueryException $ex) {
        //     if ($ex->errorInfo[1] == 1062) {
        //         return redirect()->back()->withInput($request->all())->with('error', 'Email address already exists.');
        //     }
        // }
     }


     public function birthday(Request $request){
        // $birthdays = DB::table('employees')->select('first_name','middle_name', 'last_name', 'birthday')->get();
        $birthdays = Employee::whereBetween('birthday', [
            Carbon::now()->startOfWeek(), 
            Carbon::now()->endOfWeek()
        ])->simplePaginate(3);
        
        return view('home')->with('birthdays', $birthdays);
    }

    public function edit($id)
    {
        $employee = Employee::find($id);

        return view('editemployee')->with('employee', $employee);
    }

        public function update(Request $request)
    {
        $employee = Employee::find($request->id); 

        $employee->first_name           = $request->first_name;
        $employee->middle_name          = $request->middle_name;
        $employee->last_name            = $request->last_name;
        $employee->birthday             = $request->birthday;
        $employee->gender               = $request->gender;
        $employee->marital_status       = $request->marital_status;
        $employee->contact_no           = $request->contact_no;
        $employee->street               = $request->street;
        $employee->barangay             = $request->barangay;
        $employee->city                 = $request->city;
        $employee->province             = $request->province;
        $employee->date_hire            = $request->date_hire;
        $employee->employment_status    = $request->employment_status;
        $employee->isActive             = $request->isActive;
        $employee->Job_Title            = $request->Job_Title;
        if ($request->isActive === "Active") {
            $employee->isResigned = null;
        } else {
            $employee->isResigned       = $request->isResigned;
        }
        $employee->rank                 = $request->rank;
        $employee->department           = $request->department;
        $employee->email                = $request->email;
        $employee->password             = $request->password;

        $employee->save();

        return redirect()->route('employees')->with('success', 'Employee updated successfully!');
        // redirect()->route('storeemployee');
    }

    public function index(){
        return view('employees')->with('employees', Employee::latest()->simplePaginate(15));
    }

    public function generatepdf(Request $request)
    {
        $employee = Employee::find($request->id); 

        $html  = '<h1>Employee Information</h1>';
        $html .= '<p><b>First Name:</b> ' . $employee->first_name . '</p>';
        $html .= '<p><b>Middle Name:</b> ' . $employee->middle_name . '</p>';
        $html .= '<p><b>Last Name:</b> ' . $employee->last_name . '</p>';
        $html .= '<p><b>Birthday:</b> ' . $employee->birthday . '</p>';
        $html .= '<p><b>Gender:</b> ' . $employee->gender . '</p>';
        $html .= '<p><b>Marital Status:</b> ' . $employee->marital_status . '</p>';
        $html .= '<p><b>Contact Number:</b> ' . $employee->contact_no . '</p>';
        $html .= '<p><b>Street:</b> ' . $employee->street . '</p>';
        $html .= '<p><b>Barangay:</b> ' . $employee->barangay . '</p>';
        $html .= '<p><b>City:</b> ' . $employee->city . '</p>';
        $html .= '<p><b>Province:</b> ' . $employee->province . '</p>';
        $html .= '<p><b>Date Hired:</b> ' . $employee->date_hire . '</p>';
        $html .= '<p><b>Employment Status:</b> ' . $employee->employment_status . '</p>';
        $html .= '<p><b>Active Status:</b> ' . $employee->isActive . '</p>';
        $html .= '<p><b>Job Title:</b> ' . $employee->Job_Title . '</p>';
        $html .= '<p><b>Rank:</b> ' . $employee->rank . '</p>';
        $html .= '<p><b>Department:</b> ' . $employee->department . '</p>';
        $html .= '<p><b>Email:</b> ' . $employee->email . '</p>';

        $pdf = PDF::loadHTML($html);
        return $pdf->stream('employcord.pdf');
    }

}
