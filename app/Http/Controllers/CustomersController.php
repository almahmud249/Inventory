<?php

namespace App\Http\Controllers;

use App\Customers;
use Illuminate\Http\Request;
use DB;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function viewcustomer()
    {
        return view('Cus.insertcustomer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function InsertCustomers(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|max:255',
        //     'email' => 'required|unique:employees|max:255',
        //     'address' => 'required',
        //     'phone' => 'required|max:11|min:11',
            
          
        // ]);
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        $data['city']=$request->city;
        $data['states']=$request->states;
        $data['bank_branch']=$request->bank_branch;
        $data['bank_account']=$request->bank_account;
        $data['bank_holder']=$request->bank_holder;
        $data['bank_name']=$request->bank_name;

        $employee=DB::table('customers')
        ->insert($data);
     

    //   dd($data);
        
        
        
      
                if($employee){
                    $notification=array(
                        'message'=>'Successfully data inserted',
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
            
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function singlecustomer()
    {
        return view('Cus.viewcustomer');
    }

    public function fetchcustomers(){
$data=Customers::all();
return view('Cus.viewcustomer',compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function show(Customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit(Customers $customers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customers $customers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customers $customers)
    {
        //
    }
}
