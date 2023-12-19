<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth; 

use App\Models\User;

use App\Models\Doctor;

use App\Models\Appointment;


class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->Usertype=='0')
            {
                $doctor = doctor::all();
                return view('user.home',compact('doctor'));
            }
            else
            {
                return view('admin.home');
            }
        }

        else 
        {
            return redirect()->back();
        }
    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {
        $doctor = doctor::all();
        return view('user.home',compact('doctor'));
    }
}

public function appointment(Request $request)
{
    $data = new appointment;
    $data->name=$request->name;
    $data->email=$request->email;
    $data->phone=$request->number;
    $data->doctor=$request->doctor;
    $data->date=$request->date;
    $data->message=$request->message;
    $data->status='In Progress';

    if(Auth::id())
    {

    $data->user_id=Auth::user()->id;
}
$data->save();
return redirect()->back()->with('message','Appointment Request Successfull . We will contact with you soon');
}

    public function myappointment()
    {
        if(Auth::id()){
            $userid=Auth::user()->id;
            $appoint=appointment::where('user_id',$userid)->paginate(10); // Change this line
            return view('user.my_appointment',compact('appoint'));
        }
        else
        {
            return redirect()->back();
        }
    }

    public function cancel_appoint($id){
        $data=appointment::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function edit_appoint($id) {
        $appointment = Appointment::find($id);
        $doctors = Doctor::all(); // Retrieve all doctors
        return view('user.edit_appointment', compact('appointment', 'doctors')); // Pass doctors to the view
    }

    public function updateAppointment(Request $request, $id)
{
    $appointment = Appointment::find($id);

    if (!$appointment) {
        return redirect()->route('user.my_appointment')->with('error', 'Appointment not found!');
    }

    // Update appointment fields based on the form data
    $appointment->update([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'date' => $request->input('date'),
        'doctor' => $request->input('doctor'), // Update with the correct field name
        'specialty' => $request->input('specialty'),
        'phone' => $request->input('number'),
        'message' => $request->input('message'),
    ]);
    

    // Check if the update was successful
    if ($appointment->wasChanged()) {
        return redirect()->route('user.my_appointment')->with('success', 'Appointment updated successfully!');
    } else {
        return redirect()->route('user.my_appointment')->with('error', 'No changes made to the appointment.');
    }
    }
    
    

}
