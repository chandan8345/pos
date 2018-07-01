<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\DB;
use Session;

class productController extends Controller
{

    public function index()
    {
        if(Session::has('company_id')){
        $company_id=Session::get('company_id');
        $value=DB::table('company')->where('id',$company_id)->get();
        $category=DB::table('category')->where('company_id',$company_id)->where('status','1')->get();
        $brand=DB::table('brand')->where('company_id',$company_id)->where('status','1')->get();
        return view('product')->with('value',$value)->with('category',$category)->with('brand',$brand);
        }else{
        return redirect('/login');
        }
    }

    public function create(Request $request)
    {
      if(Session::has('company_id')){ 
      $name = $request->input('name');
      $brand = $request->input('brand');
      $category = $request->input('category');
      $unit = $request->input('unit');
      $purchase = $request->input('purchase');
      $sell= $request->input('sell');
      $company_id=Session::get('company_id');
      $shop_id=Session::get('shop_id');
      $users_id=Session::get('users_id'); 
      $data=array('name'=>$name,'category_id'=>$category,'brand'=>$brand,'unit'=>$unit,'purchase'=>$purchase,'sell'=>$sell,'users_id'=>$users_id,'company_id'=>$company_id,'status'=>'1','shop_id'=>$shop_id);
      if($data != ""){
      DB::table('products')->insert($data);
      $data="";}
      return redirect('/Product');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
