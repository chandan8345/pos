<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\DB;
use Session;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::has('company_id')){
        $company_id=Session::get('company_id');
        $value=DB::table('company')->where('id',$company_id)->get();
        $category=DB::table('category')->where('company_id',$company_id)->get();
        $brand=DB::table('brand')->where('company_id',$company_id)->get();
        return view('category')->with('value',$value)->with('category',$category)->with('brand',$brand);
       }else{
        return redirect('/login');
       }
    }


    public function createCategory(Request $request)
    {
      if(Session::has('company_id')){ 
      $name = $request->input('name');
      $status = $request->input('status');
      $company_id=Session::get('company_id');
      $shop_id=Session::get('shop_id');
      $users_id=Session::get('users_id'); 
      if(!empty($name) && !empty($status)){$data=array('name'=>$name,'status'=>$status,'users_id'=>$users_id,'company_id'=>$company_id,'shop_id'=>$shop_id);
      if($data != ""){
      DB::table('category')->insert($data);
      $data="";
      }
    }
      return redirect('/Category');
      }else{
      return redirect('/login');
    } 
    }
    
    public function createBrand(Request $request)
    {
      if(Session::has('company_id')){ 
      $name = $request->input('name');
      $status = $request->input('status');
      $company_id=Session::get('company_id');
      $shop_id=Session::get('shop_id');
      $users_id=Session::get('users_id'); 
      if(!empty($name) && !empty($status)){$data=array('name'=>$name,'status'=>$status,'users_id'=>$users_id,'company_id'=>$company_id,'shop_id'=>$shop_id);
      if($data != ""){
      DB::table('brand')->insert($data);
      $data="";
      }
    }
      return redirect('/Category');
      }else{
      return redirect('/login');
    }   
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function categoryUpdate(Request $request, $id)
    {
      if(Session::has('company_id')){ 
      $name = $request->input('name');
      $status = $request->input('status');
      $users_id=Session::get('users_id'); 
      if(!empty($name) && !empty($status)){$data=array('name'=>$name,'status'=>$status,'users_id'=>$users_id);
      if($data != ""){
      DB::table('category')->where('id',$id)->update($data);
      $data="";
      }
    }
      return redirect('/Category');
      }else{
      return redirect('/login');
    }   
    }
    
     public function brandUpdate(Request $request, $id)
    {
      if(Session::has('company_id')){ 
      $name = $request->input('name');
      $status = $request->input('status');
      $users_id=Session::get('users_id'); 
      if(!empty($name) && !empty($status)){
      $data=array('name'=>$name,'status'=>$status,'users_id'=>$users_id);
      if($data != ""){
      DB::table('brand')->where('id',$id)->update($data);
      $data="";
      }
    }
      return redirect('/Category');
      }else{
      return redirect('/login');
    }   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    public function Delete($id)
    {
        DB::table('category')->where('id',$id)->delete();
        return redirect('/Category');
    }
    public function brandDelete($id)
    {
        DB::table('brand')->where('id',$id)->delete();
        return redirect('/Category');
    }
}
