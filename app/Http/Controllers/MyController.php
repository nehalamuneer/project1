<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;



use App\models\Registration;

use App\models\Package;

use Response;



class MyController extends Controller
{
    //
    function fnAddUser(Request $request){
        $firstname=$request->fname;
        $lastname=$request->lname;
        $mobile=$request->mobnum;
        $email=$request->email;
        $password=$request->pass;
        $confpass=$request->cpass;
        $userdata=new Registration([
            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'mobile'=>$mobile,
            'email'=>$email,
            'password'=>$password,
            'confirmpassword'=>$confpass
        ]);
        $user=$userdata->save();
        if($user){
            return view('registration',['message'=>'registered successfully']);
        }
        else{
            return view('registration',['message'=>'not registered']);
        }
    }
    function fnUserLogin(Request $request){
        $email=$request->email;
        $password=$request->pass;
        $userdata=DB::table('registrations')->where('email',$email)->where('password',$password)->first();
        if(is_null($userdata)){
            return view('login',['message'=>'incorrect email and password']);
        }
        else{
            $request->session()->put('userid',$userdata->id);
            return redirect('userview');
        }
        return view('login');

    }
    function fnGetUserDetails(Request $request){
        if(session()->has('userid')){
            $sessionid=$request->session()->get('userid');
            $userdetails=DB::table('registrations')->where('id',$sessionid)->first();
            return view('user',['userdata'=>$userdetails]);
            }
        else{
            echo "please login to your account";
        }
    }

    function fnaddPackage(Request $request){
        $packagename=$request->pname;
        $place=$request->place;
        $person=$request->person;
        $hotel=$request->hotel;
        $description=$request->desc;
        $days=$request->days;
        $night=$request->night;
        $amount=$request->amt;
        $image="PROJECT1".time().".".$request->img->getClientOriginalExtension();
        $request->img->storeAs('public/images',$image);
        $packagedata=new Package([
            'packagename'=>$packagename,
            'place'=>$place,
            'person'=>$person,
            'hotel'=>$hotel,
            'description'=>$description,
            'numberofdays'=>$days,
            'numberofnights'=>$night,
            'image'=>$image,
            'amount'=>$amount
        ]);
        $insert=$packagedata->save();
        
        if($insert){
            return view('package',['message'=>'data inserted successfully']);

        }
        else{
            return view('package',['message'=>'error']);
        }
 
    }


    function fnaddhotel(Request $request){
        $hotel=$request->$hotel;
        $place=$request->place;
        $amount=$request->amt;
        $type=$request->type;
        $image="PROJECT1".time().".".$request->img->getClientOriginalExtension();
        $request->img->storeas('public/images',$image);
        $data=new hotel([
            'hotelname'=>$hotel,
            'place'=>$place,
            'image'=>$image,
            'amount'=>$image,
            'type'=>$type
        ]);
        if($data){
            return view('hotelmanage',['message'=>'data inserted successfully']);

        }
        else{
            return view('hotelmanage',['message'=>'error']);
        }
 

        }
     
        function fnDisplayPackage(){
            $packagedetails=Package::all();
        return view('viewpack',['packagedata'=> $packagedetails]);
        }

    }

