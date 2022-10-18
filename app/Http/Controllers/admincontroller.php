<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\Doctor;
 use App\Models\Appointment;
 


 use Notification ;

 use App\Notifications\sendemailNotification;

class admincontroller extends Controller
{
    public function addview(){
        return view('add_doctor');
    }

    public function upload(Request $request){
        $doctor = new doctor;
$image=$request->image;
$imagename=time().'.'.$image->getClientoriginalExtension();
$request->image->move('doctorimage',$imagename);
$doctor->image=$imagename;

        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->room=$request->room;
        $doctor->specialist=$request->specialist;
        

        $doctor->save();

        return redirect()->back()->with('message','Doctor added successfully');
    
    }

    public function showappointment(){

        $data=appointment::all();
     return view('showappointment',compact('data'));   
    }


    public function approved($id){
        $data=appointment::find($id);
        $data->status='approved';
        $data->save();
        return redirect()->back();
    }


    public function canceled($id){
        $data=appointment::find($id);
        $data->status='canceled';
        $data->save();
        return redirect()->back();
    }

public function showdoctor(){
    $data= doctor::all();
    return view('showdoctor',compact('data'));
}

public function deletedoctor($id){
$data=doctor::find($id);
$data->delete();

return redirect()->back();
}

public function updatedoctor($id){
    $data = doctor::find($id);
    return view('updatedoctor',compact('data'));

}

public function editdoctor( Request $request, $id){
    $doctor = doctor::find($id);

    $doctor->name= $request->name;
    $doctor->phone= $request->phone;
    $doctor->specialist= $request->specialist;
    $doctor->room= $request->room;

   
$doctor->save();
return redirect()->back();
    
}


public function emailview($id){
    $data=appointment::find($id);

return view('emailview',compact('data'));

}


public function sendemail(Request $request,$id){
$data = appointment::find($id);
$details=[
'greeting'=>$request->greeting,

'body'=>$request->body,
'actiontext'=>$request->actiontext,
'actionurl'=>$request->actionurl,
'endpart'=>$request->endpart

];
Notification::send($data,new sendemailNotification($details));

return redirect()->back();
   

}

    
    
}
