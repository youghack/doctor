<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype=='0') {
                $doctor = Doctor::all();
                return view('user.home',compact('doctor'));
            }
            else {
                return view('admin.home');
            }
        }else {
            return redirect()->back();
        }
    }
    //for user home page
    public function index(){
        if (Auth::id()) {
            return redirect('home');
        }else {
            $doctor = Doctor::all();
            return view('user.home', compact('doctor'));
        }
    }


    public function appointment(Request $request){
        $data = new Appointment;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->number;
        $data->doctor = $request->doctor;
        $data->date = $request->date;
        $data->message = $request->message;
        $data->status = 'In Progress';

        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }
        $data->save();
        return redirect()->back()->with('message', 'Appointment Request Successful. We will contact you soon.');
    }

    public function myappointment(){

        if (Auth::id()) {
            if (Auth::user()->usertype==0) {
                $userid = Auth::user()->id;
                $appoint = appointment::where('user_id', $userid)->get();
                return view('user.my_appointment',compact('appoint'));
            }else {
                return redirect()->back();
            }
        }else{
            return redirect('login');
        }
    }

    public function cancel_appoint($id){
        $data = appointment::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function viewdoctor(){
        $doctor = Doctor::all();
        return view('user.viewdoctor', compact('doctor'));
    }


    public function about_us(){
        return view('user.about');
    }
}
