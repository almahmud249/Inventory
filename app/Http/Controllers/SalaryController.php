<?php

namespace App\Http\Controllers;

use App\salary;
use Illuminate\Http\Request;
use DB;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewsalary()
    {
        return view('sup.salary');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function InsertSalaries(Request $request)
    {

        $month=$request->month;
        $emp_id=$request->emp_id;
        $mt=DB::table('salaries')->where('emp_id',$emp_id)->where('month',$month)->first();

        if($mt===null) {


            $data=array();
            $data['emp_id']=$request->emp_id;
            $data['month']=$request->month;
            $data['year']=$request->year;
            $data['advanced_salary']=$request->advanced_salary;
            
          
          
            
            $employee=DB::table('salaries')
                    ->insert($data);
    
                    if($employee){
                        $notification=array(
                            'message'=>'Successfully advance paid',
                            'alert-type'=>'success'
                        );
                        return Redirect()->route('home')->with( $notification);
                    }else{
                        $notification=array(
                            'message'=>'Error',
                            'alert-type'=>'success'
                        );
                        return Redirect()->route('home')->with( $notification);
                    }
            
        }else{
          
                $notification=array(
                    'message'=>'Opps!! Already paid',
                    'alert-type'=>'error'
                );
                return Redirect()->route('home')->with( $notification);
            }
            





        }

        

            
          
            
          
                
            
    

    /**
     * Display the specified resource.
     *
     * @param  \App\salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function allsalary()
    {
        return view('sup.allsalary');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function fetchsalary()
    {
        $emp=DB::table('salaries')
        ->join('employees', 'salaries.emp_id', 'employees.id')
        ->select('salaries.*', 'employees.name','employees.salary' )
        ->orderBy('id','DESC')
        ->get();
        
        
        return view('sup.allsalary',compact('emp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, salary $salary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function destroy(salary $salary)
    {
        //
    }
}
