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
            if (Auth::user()->usertype == '0') {
                $doctor = Doctor::all();
                return view('user.home', compact('doctor'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }
    //for user home page
    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $doctor = Doctor::all();
            return view('user.home', compact('doctor'));
        }
    }


    // public function appointment(Request $request){
    //     $data = new Appointment;
    //     $data->name = $request->name;
    //     $data->citizenship = $request->citizenship;
    //     $data->email = $request->email;
    //     $data->phone = $request->number;
    //     if ($request->hasFile('avatar')) {
    //         $file = $request->file('avatar');
    //         $newName = time() . '.' . $file->getClientOriginalExtension();
    //         $file->move(public_path('avatars'), $newName); // Move the file to the 'avatars' directory
    //         $data->avatar = "avatars/$newName"; // Update the data$data with the avatar path
    //         $data->save(); // Save the user with the avatar
    //     }
    //     $data->date = $request->date;
    //     $data->message = $request->message;
    //     $data->status = 'In Progress';

    //     if (Auth::id()) {
    //         $data->user_id = Auth::user()->id;
    //     }
    //     $data->save();
    //     return redirect()->back()->with('message', 'Appointment Request Successful. We will contact you soon.');
    // }
    public function appointment(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'citizenship' => 'required|string',
            'email' => 'required|email',
            'number' => 'required|numeric',
            'gfather' => 'required|string',
            'avatar' => 'required|file|image',
        ]);

        $data = new Appointment;
        $data->name = $request->name;
        $data->citizenship = $request->citizenship;
        $data->email = $request->email;
        $data->phone = $request->number;

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $newName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('avatars'), $newName);
            $data->avatar = "avatars/$newName";
        }

        $data->gfather = $request->gfather;
        $data->message = $request->message;
        $data->status = 'Not Viewed';

        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message', 'तपाईको Complain Register भएको छ, हामी तपाई लाई छिटो सम्पर्क गर्नेछौँ');
    }

    public function complainview(){
        if(Auth::user()->usertype == 0){
            return view('user.appointment');
        }else{
            return redirect()->back();
        }
    }

    public function myappointment()
    {

        if (Auth::id()) {
            if (Auth::user()->usertype == 0) {
                $userid = Auth::user()->id;
                $appoint = appointment::where('user_id', $userid)->get();
                return view('user.my_appointment', compact('appoint'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }

    public function cancel_appoint($id)
    {
        $data = appointment::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function viewdoctor()
    {
        $doctor = Doctor::all();
        return view('user.view_administration', compact('doctor'));
    }


    public function about_us()
    {
        return view('user.about');
    }
}
