<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\crypt;
use  App\Models\Restaurant;
use  App\Models\User;
use Session;


class MainController extends Controller
{
    
    function home(){
        return view('home');
    }

    function list(){
        $data= Restaurant::all();
        return view('list',["data"=>$data]);
       
    }

    // function add(){
    //     return view('add');
    // }

    function addValue(Request $req){
        // return $req->input();
        $restaurant=new Restaurant;
        $restaurant->name=$req->input('name');
        $restaurant->email=$req->input('email');
        $restaurant->address=$req->input('address');
        $restaurant->save();
        // $req->Session()->flash('status','Successfully Inserted');
         return redirect('/list')->with('status','Data Added Successfully');

    }

    function edit($id){
       $data=Restaurant::find($id);
       return view('edit',['data'=>$data]);
        
    }

    function update(Request $req){
        // return $req->input();
        $restaurant=Restaurant::find($req->input('id'));
        $restaurant->name=$req->input('name');
        $restaurant->email=$req->input('email');
        $restaurant->address=$req->input('address');
        $restaurant->save();
        // $req->Session()->flash('status','Successfully Inserted');
         return redirect('/list')->with('status','Data Updated Successfully');

    }

    function delete(Request $req){
        $delete=Restaurant::find($req->input('id'));
        $delete->delete();
        return redirect('/list')->with('status','Data Deleted Successfully');
    }


    function login(){
        return view('login');
    }
    function registration(){
        return view('registration');
    }

    function store(Request $request){
        $user= new User;
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=Crypt::encrypt($request->input('password'));
        $user->save();
        return redirect('/login');
    }

    function logs(Request $request){
      
        $user=User::where("email",$request->input('email'))->get();
        if(Crypt::decrypt($user[0]->password) == $request->input('password')){
           
            $request->session()->put('user',$user[0]->name);
            return redirect('/list');
        }else{
            return redirect('/login')->with('status','Wrong email or password');

        }
        
    }
  

}