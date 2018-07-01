<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\DB;
use Session;


class stockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::has('company_id')){
        $arr[0]='';
        $company_id=Session::get('company_id');
        $shop_id=Session::get('shop_id');
        $users_id=Session::get('users_id');
        $array=DB::table('products')->get();
        $category=DB::table('category')->where('company_id',$company_id)->get();
        $brand=DB::table('brand')->where('company_id',$company_id)->get();
        $value=DB::table('company')->where('id',$company_id)->get();
        $sql="select products.id,products.name,products.category_id as category_id,products.brand as brand,category.name as category,brand.name as brand,products.purchase,products.sell,products.unit,products.status FROM products,brand,category WHERE products.id>0 and products.brand=brand.id and products.category_id=category.id and products.company_id='$company_id' and products.shop_id='$shop_id'";
        $data=DB::select($sql);
        foreach($array as $row){
            $arr[] = $row->name;
        }   
        return view('stock')->with('data',$data)->with('value',$value)->with('category',$category)->with('brand',$brand)->with('arr',$arr);
        }else{
        return redirect('/login');
       }
    }

    public function search(Request $request)
    {
      if(Session::has('company_id')){
      $arr[0]=''; 
      $name = $request->input('name');
      $brand_id = $request->input('brand');
      $category_id = $request->input('category');
      $company_id=Session::get('company_id');
      $shop_id=Session::get('shop_id');
      $users_id=Session::get('users_id');
      $array=DB::table('products')->get();
      $category=DB::table('category')->where('company_id',$company_id)->get();
      $brand=DB::table('brand')->where('company_id',$company_id)->get();
      $value=DB::table('company')->where('id',$company_id)->get();
      $sql="select products.id,products.name,products.category_id,category.name as category,products.brand,brand.name as brand,products.purchase,products.sell,products.unit,products.status FROM products,brand,category WHERE products.brand=brand.id and products.category_id=category.id and products.id>0 and products.company_id='$company_id' and products.shop_id='$shop_id'";
      $compact=array('n'=>$name, 'c'=>$category_id, 'b'=>$brand_id);
      if(!empty($name)){
          $sql =$sql." and products.name like '%$name%'";
      }if(!empty($brand_id)){
          $sql =$sql." and brand='$brand_id'";
      }if(!empty($category_id)){
          $sql =$sql." and category_id='$category_id'";
      }
      $data=DB::table('products')->get();
      $data=DB::select($sql);
      foreach($array as $row){
        $arr[] = $row->name;
    } 
      return view('stock',compact('compact'))->with('data',$data)->with('value',$value)->with('category',$category)->with('brand',$brand)->with('arr',$arr);
      $name="";$brand_id="";$category_id="";
      }else{
      return redirect('/login');
    }
    }

    public function update(Request $request, $id)
    {
      if(Session::has('company_id')){ 
      $name = $request->input('name');
       $brand = $request->input('brand');   
      $category = $request->input('category');
      $unit = $request->input('unit');
      $purchase = $request->input('purchase');
      $sell= $request->input('sell');
      $status= $request->input('status');
      $company_id=Session::get('company_id');
      $shop_id=Session::get('shop_id');
      $users_id=Session::get('users_id');
      $data=array('name'=>$name,'category_id'=>$category,'brand'=>$brand,'unit'=>$unit,'purchase'=>$purchase,'sell'=>$sell,'users_id'=>$users_id,'company_id'=>$company_id,'status'=>$status,'shop_id'=>$shop_id);
      if($data != ""){
      DB::table('products')->where('id',$id)->update($data);
      $data="";}
      return redirect('/Stock');
      }else{
      return redirect('/login');
    }
    }

    public function delete($id)
    {
        DB::table('products')->where('id',$id)->delete();
        return redirect('/Stock');
    }
}
