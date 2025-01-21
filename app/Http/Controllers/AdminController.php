<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification as NotificationsNotification;
use Illuminate\Support\Facades\Auth;
use Notification;


class AdminController extends Controller
{
    public function addview()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                return view('admin.add_administrator');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }

    public function upload(Request $request)
    {
        $doctor = new Doctor();
        $doctor->name = $request->fullname;
        // left side को name database को table को name हो र right side ko fullname form को name भित्र रहेको fullname हो । यसको मतलब यो भयो कि form मा admin ले जे नाम राखेर पठाअछ त्यो नाम database को name भन्ने table भित्र राखदिनु ।
        $doctor->phone = $request->number;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;

        if ($request->hasFile('image')) {
            $file = $request->image;
            $newName = time() . "." . $file->getClientOriginalExtension();
            $file->move('images', $newName);
            $doctor->image = "images/$newName";
        }

        $doctor->save();
        return redirect()->back()->with('message', 'Doctor Added Successfully');
    }

    public function complain()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                $data  = Appointment::all();
                return view('admin.complain', compact('data'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }
    public function showcomplain(string $id)
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                $data = Appointment::find($id);
                return view('admin.complain_view', compact('data'));
            } else {
                return redirect()->back();
            }
        }
    }

    public function done($id)
    {
        $data = Appointment::find($id);
        $data->status = 'done';
        $data->save();
        return redirect()->back();
    }

    public function pending($id)
    {
        $data = Appointment::find($id);
        $data->status = 'pending';
        $data->save();
        return redirect()->back();
    }

    public function showadministrator()
    {
        $data = Doctor::all();
        return view('admin.showadministrator', compact('data'));
    }

    public function deletedoctor($id)
    {
        $data = Doctor::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function update_administrator($id)
    {
        $data = Doctor::find($id);
        return view('admin.update_administrator', compact('data'));
    }

    public function editdoctor(Request $request, $id)
    {
        $doctor = Doctor::find($id);

        $doctor->name = $request->fullname;
        $doctor->phone = $request->number;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;

        if ($request->hasFile('image')) {
            $file = $request->image;
            $newName = time() . "." . $file->getClientOriginalExtension();
            $file->move('images', $newName);
            $doctor->image = "images/$newName";
        }
        $doctor->update();
        return redirect()->back()->with('message', 'Administrator Updated Successfully');
    }

    public function emailview($id)
    {

        $data = Appointment::find($id);

        return view('admin.email_view', compact('data'));
    }

    public function sendemail(Request $request, $id)
    {
        $data = Appointment::find($id);
        $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart,
        ];

        Notification::send($data, new SendEmailNotification($details));
        return redirect()->back()->with('message', 'Email sent Successfully');
    }
}
