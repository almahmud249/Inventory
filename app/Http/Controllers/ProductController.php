<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewproduct()
    {
        return view('Cus.viewproduct');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function InsertProduct(Request $request)
    {
        $data=array();
        $data['code_name']=$request->code_name;
        $data['code']=$request->code;
        $data['name']=$request->name;
        $data['warehouse']=$request->warehouse;
        $data['buying']=$request->buying;
        $data['expire']=$request->expire;
        $data['buying_price']=$request->buying_price;
        $data['selling_price']=$request->selling_price;
       
       
        
        
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
                $employee=DB::table('products')
                ->insert($data);

                if($employee){
                    $notification=array(
                        'message'=>'Successfully data inserted',
                        'alert-type'=>'success'
                    );
                    return Redirect()->route('fetch.product')->with( $notification);
                }else{
                    $notification=array(
                        'message'=>'Error',
                        'alert-type'=>'success'
                    );
                    return Redirect()->route('fetch.product')->with( $notification);
                }
            }else{
                return Redirect()->back();
            }
        }else{
            if($data){
              
                $employee=DB::table('products')
                ->insert($data);

                if($employee){
                    $notification=array(
                        'message'=>'Successfully data inserted',
                        'alert-type'=>'success'
                    );
                    return Redirect()->route('fetch.product')->with( $notification);
                }else{
                    $notification=array(
                        'message'=>'Error',
                        'alert-type'=>'success'
                    );
                    return Redirect()->route('fetch.product')->with( $notification);
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
    public function allProduct()
    {
        return view('Cus.allproduct');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function fetchproduct()
    {
        $dt=DB::table('products')->get();
       

         return view('Cus.allproduct', compact('dt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function eachproduct($id)
    {
        $dt=DB::table('products')->where('id',$id)->first();
      
       
       

         return view('Cus.singleview', compact('dt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function DeleteProduct($id)
    {
        $dt=DB::table('products')->where('id',$id)->first();
        $pht=$dt->photo;
        if($pht){

            unlink($pht);
            $dt=DB::table('products')->where('id',$id)->delete();

            if($dt){
                $notification=array(
                    'message'=>'Successfully data Deleted',
                    'alert-type'=>'success'
                );
                return Redirect()->route('fetch.product')->with( $notification);
            }else{
                $notification=array(
                    'message'=>'Error',
                    'alert-type'=>'success'
                );
                return Redirect()->route('fetch.product')->with( $notification);

            }
            


        } else{


            
            $dt=DB::table('products')->where('id',$id)->delete();

            if($dt){
                $notification=array(
                    'message'=>'Successfully data Deleted',
                    'alert-type'=>'success'
                );
                return Redirect()->route('fetch.product')->with( $notification);
            }else{
                $notification=array(
                    'message'=>'Error',
                    'alert-type'=>'success'
                );
                return Redirect()->route('fetch.product')->with( $notification);
            }

        }
        
    }

    public function editproduct($id){

        $dt=DB::table('products')->where('id',$id)->first();
        return view('Cus.editpage',compact('dt'));



    }

    public function Updateproduct(Request $request, $id){

        $data=array();
        $data['code_name']=$request->code_name;
        $data['code']=$request->code;
        $data['name']=$request->name;
        $data['warehouse']=$request->warehouse;
        $data['buying']=$request->buying;
        $data['expire']=$request->expire;
        $data['buying_price']=$request->buying_price;
        $data['selling_price']=$request->selling_price;
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
                $prd=DB::table('products')->where('id',$id)->first();
                $img=$prd->photo;
                if($img){

                    $done=unlink($img);
                $product=DB::table('products')->where('id',$id)->update($data);
                
                if($product){
                    $notification=array(
                        'message'=>'Successfully data Updated',
                        'alert-type'=>'success'
                    );
                    return Redirect()->route('fetch.product')->with( $notification);
                }else{
                    $notification=array(
                        'message'=>'Error',
                        'alert-type'=>'success'
                    );
                    return Redirect()->route('fetch.product')->with( $notification);
                }



                
                }else{

                    
                $product=DB::table('products')->where('id',$id)->update($data);
                
                if($product){
                    $notification=array(
                        'message'=>'Successfully data Updated',
                        'alert-type'=>'success'
                    );
                    return Redirect()->route('fetch.product')->with( $notification);
                }else{
                    $notification=array(
                        'message'=>'Error',
                        'alert-type'=>'success'
                    );
                    return Redirect()->route('fetch.product')->with( $notification);
                }

                }
                









            }else{
                return Redirect()->back();
            }
        }else{


            $oldphoto=$request->old_photo;
            if($oldphoto){

                $data['photo']=$oldphoto;    
                $user=DB::table('products')->where('id',$id)->update($data);
                if($user){
                    $notification=array(
                        'message'=>'Successfully data Updated',
                        'alert-type'=>'success'
                    );
                    return Redirect()->route('fetch.product')->with( $notification);
                }else{
                    $notification=array(
                        'message'=>'Error',
                        'alert-type'=>'success'
                    );
                    return Redirect()->route('fetch.product')->with( $notification);
                }

            }else{
                return Redirect()->back();
            }

        }

          
                }
            
 


    
}
