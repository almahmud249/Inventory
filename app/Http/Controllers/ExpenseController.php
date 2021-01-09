<?php

namespace App\Http\Controllers;

use App\expense;
use Illuminate\Http\Request;
use DB;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewexpense()
    {
        return view('Cus.expensepage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Insertexpense(Request $request)
    {
        
        $data=array();
        $data['details']=$request->details;
        $data['amount']=$request->amount;
        $data['month']=$request->month;
        $data['year']=$request->year;
        $data['date']=$request->date;
        
        
        
        if($data){ 
           
                
            $expense=DB::table('expenses')->insert($data);
                
                if($expense){
                    $notification=array(
                        'message'=>'Successfully data inserted',
                        'alert-type'=>'success'
                    );
                    return Redirect()->route('today.expense')->with( $notification);
                }else{
                    $notification=array(
                        'message'=>'Error',
                        'alert-type'=>'success'
                    );
                    return Redirect()->route('today.expense')->with( $notification);
                }
                

                
            }else{

                $notification=array(
                    'message'=>'Data not inserted',
                    'alert-type'=>'error'
                );
                return Redirect()->route('today.expense')->with( $notification);

            }

            }
            
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function todayexpense()

    {

        $date=  date('d/m/y'); 
        $today=Db::table('expenses')->where('date',$date)->get();
      return view('Cus.todayexpense',compact('today'));
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function monthlyexpense()
    {
        $month=  date('F'); 
        $mth=Db::table('expenses')->where('month',$month)->get();
       
        return view('Cus.monthlyexpense',compact('mth'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function januaryexpense()
    {
        $month= 'January';
        $mth=Db::table('expenses')->where('month',$month)->get();
       
        return view('Cus.monthlyexpense',compact('mth'));
    }

    public function februaryexpense()
    {
        $month= 'February';
        $mth=Db::table('expenses')->where('month',$month)->get();
       
        return view('Cus.monthlyexpense',compact('mth'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, expense $expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(expense $expense)
    {
        //
    }
}
