<?php

namespace App\Http\Controllers\User\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutUsController extends Controller
{
    public function aboutUs(){
        $data['about1'] = DB::table('cms')->where('page','about-us')->get();
        dd($data);
        return view('User.AboutUs.aboutUs');
    }

    public function serviceWeOffer(){
        return view('User.Service.service');
    }

    public function contactUs(){
        return view('User.Contact.contact');
    }

    public function enqueryForm( Request $request) {
        $request->validate([
            'enquery_name' => 'required|string',
            'enquery_email' => 'nullable|email',
            'enquery_phone' => 'required|string',
            'address' => 'required|string',
            'message' => 'required|string'
        ]);
        // $data = $request->only('name', 'email', 'phone', 'address', 'message');
        try {
            DB::table('enquery_forms')->insert([
            'name' => $request->enquery_name,
            'email' => $request->enquery_email,
            'phone' => $request->enquery_phone,
            'address' => $request->address,
            'message' => $request->message
            ]);
            return back()->with('msg', 'Your query has been submitted, wait for response.');
        } catch (\Throwable $th) {
            return back()->with('msg', 'Some error occur!, try again.');
        }
    }
}
