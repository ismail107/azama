<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Doctor; 
use App\Models\Appointment; 


class DASHBOARDController extends Controller
{
    public function redirect(){

    

    if(Auth::id()){
       if(Auth::user()->usertype=='0'){
        $doctor = doctor::all();
        return view('dashboard',compact('doctor'));
       }
       else if(Auth::user()->usertype=='1')
       {
        
        return view('admin');
       }
    }
    else{
        return redirect()->back();
    }
}




public function myappointment(){

    if(auth::id()){

$userid=Auth::user()->id;
$appoint=appointment::where('user_id',$userid)->get();
    return view('myappointment',compact('appoint'));}
    else{
        return redirect()->back();
    }
}





    

public function deletedoctor($id){
    $data=appoint::find($id);
    $data->delete();
    
    return redirect()->back();
    }
      




public function cancel_appoint($id){

    
    $appoint=appointment::find($id);
    $appoint->delete();
    
    return redirect()->back();
    }
    





public function appointment(Request $request){





    

    $data = new appointment;

    $data->name=$request->name;
    $data->email=$request->email;
    $data->date=$request->date;
   
    $data->number=$request->number;
    

    $data->status='in progress';

    if(Auth::id()){

    $data->user_id=Auth::user()->id;}$data->save();

    return redirect()->back()->with('message','  Appointment requested successfully ' );
}
}
