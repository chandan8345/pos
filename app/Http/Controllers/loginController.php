<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\DB;
use Session;

class loginController extends Controller
{
    
    public function index()
    {
        return view('login');
    }

    public function login(Request $request){
      $user = $request->user;
      $pass = $request->pass;
      $role = $request->user_type;
      $u=0;$p=0;
      $db=DB::table('users')->get();
      foreach($db as $row){
            if($row->status == 1){
                if($row->role == $role){
                    if($row->username == $user){
                        $u++;
                    }
                    if($row->password == $pass){
                        $p++;
                    }
                    if($row->username == $user && $row->password == $pass){
                        Session::put('users_id',$row->id);
                        Session::put('company_id',$row->company_id);
                        Session::put('shop_id',$row->shop_id);
                        Session::put('user_name',$row->username);
                    }
                }
            }       
      }
        if($u==0 && $p==0){
            echo "Enter right information below";
        }else if($u==0 || $p==0){
        if($u != 0){
            echo "Sorry, ".$user." password wrong.";
            $p=0;$u=0;
        }else if($p !=0){
            echo "Sorry, username was worng.";
            $p=0;$u=0;
        }}else{
           Session::put('username',$user);
           echo "login";    
        }
       
    }
    
    public function logout(Request $request)
    {
         Session::forget('username');
         Session::forget('company_id');
         Session::forget('users_id');
         Session::forget('shop_id');
         Session::forget('user_name');
         Session::flush();
         return redirect('/login');
    }
     
    public function create()
    {
        //
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
