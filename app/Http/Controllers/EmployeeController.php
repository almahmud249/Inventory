<?php

namespace App\Http\Controllers;


use App\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

 use DB;

class EmployeeController extends Controller
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
    
    public function employee()
    {
        return view('AddEmployee');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:employees|max:255',
            'address' => 'required',
            'phone' => 'required|max:11|min:11',
            'salary' => 'required|max:255',
            'experience' => 'required',
        ]);
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['address']=$request->address;
        $data['phone']=$request->phone;
        $data['salary']=$request->salary;
        
        $data['experience']=$request->experience;
        $image=$request->file('photo');
        
        if($image){ 
            $image_name=str::random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='employee/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path, $image_full_name);
            if($success){
                $data['photo']= $image_url;
                $employee=DB::table('employees')
                ->insert($data);

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
            }else{
                return Redirect()->back();
            }
        }else{
            if($data){
              
                $employee=DB::table('employees')
                ->insert($data);

                if($employee){
                    $notification=array(
                        'message'=>'Successfully data inserted',
                        'alert-type'=>'success'
                    );
                    return Redirect()->route('all.employee')->with( $notification);
                }else{
                    $notification=array(
                        'message'=>'Error',
                        'alert-type'=>'success'
                    );
                    return Redirect()->route('add.employee')->with( $notification);
                }

          
                }
            }
        }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Display the specified resource.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function allEmployees()
    {
        // $employees=employee::all();
        // return view('all.employee',compact('$employees'));
        // return view('allemployees');
        
        $emp=employee::all();
        // $dt=DB::table('employees')->get();
        // return dd($emp);
        // print_r($emp);
        
        return view('allemployees',compact('emp'));
        // return view('allemployees')->with('emp',$dt);
    }

    public function DeleteEmployees($id)

    {

                
                $dt=DB::table('employees')->where('id',$id)->first();
                $pht=$dt->photo;
                if($pht){

                    unlink($pht);
                    $dt=DB::table('employees')->where('id',$id)->delete();
    
                    if($dt){
                        $notification=array(
                            'message'=>'Successfully data Deleted',
                            'alert-type'=>'success'
                        );
                        return Redirect()->route('all.employee')->with( $notification);
                    }else{
                        $notification=array(
                            'message'=>'Error',
                            'alert-type'=>'success'
                        );
                        return Redirect()->route('all.employee')->with( $notification);
                    }


                }else{


                    
                    $dt=DB::table('employees')->where('id',$id)->delete();
    
                    if($dt){
                        $notification=array(
                            'message'=>'Successfully data Deleted',
                            'alert-type'=>'success'
                        );
                        return Redirect()->route('all.employee')->with( $notification);
                    }else{
                        $notification=array(
                            'message'=>'Error',
                            'alert-type'=>'success'
                        );
                        return Redirect()->route('all.employee')->with( $notification);
                    }

                }
                
        
        
    }

    public function EditEmployees($id)
    {
//         //  $data=DB::table('employees')->where('id',$id)->first();
//         $data=DB::table('employees')->where('id',$id)->first();

// //         return view('edit',compact('data'));

  
//     return Redirect()->route('edit.employee',compact('data'));

$dt=DB::table('employees')->where('id',$id)->first();
// return redirect()->route('edit.employee',compact('dt'));
return view('edit',compact('dt'));

    }

  
    public function View()
    {
        return view('edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function UpdateEmployees(Request $request, $id)
    {
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['address']=$request->address;
        $data['phone']=$request->phone;
        $data['salary']=$request->salary;
        
        $data['experience']=$request->experience;
        $dt=DB::table('employees')->where('id',$id)->update($data);
        if($dt){
            $notification=array(
                'message'=>'Successfully data updated',
                'alert-type'=>'success'
            );
            return Redirect()->route('all.employee')->with( $notification);
        }else{
            $notification=array(
                'message'=>'Error',
                'alert-type'=>'success'
            );
            return Redirect()->route('all.employee')->with( $notification);
        }
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        //
    }
}
