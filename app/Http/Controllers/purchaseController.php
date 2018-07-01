<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\DB;
use Session;

class purchaseController extends Controller
{
    public function index()
    {
        if(Session::has('company_id')){
        $arr[0]='';
        $custom[0]='';
        $company_id=Session::get('company_id');
        $value=DB::table('company')->where('id',$company_id)->get();
        $data=DB::table('products')->get();
        $c=DB::table('users')->get();
        $category=DB::table('category')->where('company_id',$company_id)->get();
        $brand=DB::table('brand')->where('company_id',$company_id)->get();
        foreach($data as $row){
            $arr[] = $row->name;
        }
        foreach($c as $r){
          $custom[] = $r->username;
        }
         return view('purchase')->with('value',$value)->with('category',$category)->with('brand',$brand)->with('arr',$arr)->with('custom',$custom);
        }else{
        return redirect('/login');
       }
    }

    public function search(Request $request)
    {     
          $category="";$brand="";$unit="";$purchase="";$sell="";$status="";
          $company_id=Session::get('company_id');
          $name=$request->search;
          $info=DB::table('products')->where('name',$name)->where('company_id',$company_id)->get();
          foreach($info as $row){
              $category=$row->category_id;
              $brand=$row->brand;
              $unit=$row->unit;
              $purchase=$row->purchase;
              $sell=$row->sell;
              $status=$row->status;  
          }
          $array=array('category'=>$category,'brand'=>$brand,'unit'=>$unit,'purchase'=>$purchase,'sell'=>$sell,'status'=>$status); 
          return json_encode($array);
    }

    public function memo(Request $request)
    {
        $memo="";
        $customer = $request->customer;
        $total = $request->total;
        $paid = $request->paid;
        $dues = $request->dues;
        $balance = $request->balance;
        $date = $request->date;
        $company_id=Session::get('company_id');
        $shop_id=Session::get('shop_id');
        $entry_id=Session::get('users_id');
        $data=DB::select("SELECT id FROM users WHERE username='$customer' and role='1' ");
        foreach($data as $row){
            $id=$row->id;
            $supplier_id=$id;
        }
        $memo=array('supplier_id'=>$id,'total'=>$total,'credit'=>$paid,'dues'=>$dues,'balance'=>$balance,'date'=>$date,'entry_id'=>$entry_id,'company_id'=>$company_id,'status'=>'1','shop_id'=>$shop_id);
        $i = DB::table('supplier_transaction')->insertGetId( $memo );
        echo $i;
    }

    public function invoice(Request $request)
    {
        $supplier = $request->s;
        $name = $request->p;
        $quantity = $request->q;
        $amount = $request->a;
        $t_id = $request->is;
        $date=$request->date;
        $company_id=Session::get('company_id');
        $shop_id=Session::get('shop_id');
        $entry_id=Session::get('users_id');
        $data=DB::select("SELECT id FROM products WHERE name='$name' ");
        foreach($data as $row){
            $product_id=$row->id;
        }
        $data1=DB::select("SELECT id FROM users WHERE username='$supplier' and role='1' ");
        foreach($data1 as $row){
            $supplier_id=$row->id;
        }
        //echo $name."_".$quantity."_".$amount."_".$t_id."_".$date;
         $in=array('transaction_id'=>$t_id,'product_id'=>$product_id,'quantity'=>$quantity,'amount'=>$amount,'date'=>$date,'supplier_id'=>$supplier_id,'entry_id'=>$entry_id,'company_id'=>$company_id,'shop_id'=>$shop_id,'status'=>'1');
         DB::table('supplier_memo')->insert($in);
    }

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
