<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        if (Contact::exists()) {

            $data = Contact::findOrFail(1);
            return view('admin.dashboard', ['contacts' => $data]);
        }
        return view('admin.dashboard');
    }
    public function contact_index()
    {
        if (Contact::exists()) {

            $data = Contact::findOrFail(1);
            return view('admin.contacts', ['contacts' => $data]);
        }
        return view('admin.contacts');
    }

    public function contact_store(Request $request)
    {
        $data = new Contact;
        $data->phone = $request->input('phone');
        $data->whatsapp = $request->input('whatsPhone');
        $data->email = $request->input('email');
        $data->address = $request->input('address');
        $data->save();
        return redirect()->route('contacts');
    }
    public function contact_update(Request $request)
    {
        $data =  Contact::findOrFail(1);
        $data->phone = $request->input('phone');
        $data->whatsapp = $request->input('whatsPhone');
        $data->email = $request->input('email');
        $data->address = $request->input('address');
        $data->save();
        return redirect()->route('contacts');
    }
}
