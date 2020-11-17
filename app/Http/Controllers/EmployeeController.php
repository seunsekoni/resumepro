<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\JobHistory;
use App\Models\Title;
use App\Models\Department;
use Log;

use Illuminate\Http\Request;



class EmployeeController extends Controller
{
    /**
     * Generate Five employees randomly
     * @return \Illuminate\Http\Response
     */
    public function generate_employees()
    {
        try {
            // use factory to generate 5 random employess and persist to db
            $employees = Employee::factory(5)->create();

            return response()->json([
                'data' => $employees,
                'success' => true
            ]);
            
        } catch (\Throwable $th) {
            Log::error($th);
            return ('Could not generate employees');
        }
    }

    /**
     * View an employee
     * @return \Illuminate\Http\Response
     */
    public function view_employee($emp_id)
    {
        try {
            // find employee
            $employee = Employee::find($emp_id);
            $res = $employee->load(['job_history']);

            return response()->json([
                'data' => $res,
                'success' => true
            ]);
            
        } catch (\Throwable $th) {
            Log::error($th);
            return ('Could not view employee');
        }
    }

    /**
     * Generate Three Jobs for all employees randomly
     * @return \Illuminate\Http\Response
     */
    public function generate_job_history()
    {
        try {
            // use factory to generate 5 random job history and persist to db
            $employees = Employee::all();
            
            foreach($employees as $emp) {
                // attach employee id for each job history created
                $job = JobHistory::factory(3)->employee_id($emp->id)->create();
            }
            // $res = $employees->load('job_history');
            $res = $employees->load(['job_history']);
            return response()->json([
                'data' => $res,
                'success' => true,
                'message' => 'Jobs created successfully'
            ]);
            
        } catch (\Throwable $th) {
            Log::error($th);
            return ('Could not generate job histories, Have you created employees?');
        }
    }

    /**
     * Generate Six Titles randomly
     * @return \Illuminate\Http\Response
     */
    public function generate_titles()
    {
        try {
            // use factory to generate 6 random titles and persist to db
            $titles = Title::factory(6)->create();

            return response()->json([
                'data' => $titles,
                'success' => true
            ]);
            
        } catch (\Throwable $th) {
            Log::error($th);
            return ('Could not generate titles');
        }
    }

    /**
     * Generate Six Titles randomly
     * @return \Illuminate\Http\Response
     */
    public function generate_departments()
    {
        try {
            // use factory to generate 6 random titles and persist to db
            $depts = Department::factory(10)->create();

            return response()->json([
                'data' => $depts,
                'success' => true
            ]);
            
        } catch (\Throwable $th) {
            Log::error($th);
            return ('Could not generate departments');
        }
    }
}
