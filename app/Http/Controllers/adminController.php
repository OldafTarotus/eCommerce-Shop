<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\SubCategory;
use App\Models\MainCategory;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        if (Contact::exists() | MainCategory::exists() | SubCategory::exists()) {
            $subData = SubCategory::all();
            $catData = MainCategory::all();
            $data = Contact::first();
            return view('admin.dashboard', ['contacts' => $data, 'mainCategorys' => $catData, 'subCategorys' => $subData]);
        }
        return view('admin.dashboard');
    }
    public function contact_index()
    {
        if (Contact::exists()) {

            $data = Contact::first();
            return view('admin.contacts', ['contacts' => $data]);
        }
        return view('admin.contacts');
    }

    public function contact_store(Request $request)
    {

        $filedData = $request->validate([
            'phone' => 'required|regex:/(01)[0-9]{9}/',
            'whatsapp' => 'required|regex:/(01)[0-9]{9}/',
            'email' => 'required|email',
            'google_map' => 'required',
            'address_en' => 'required',
            'address_ar' => 'required',


        ]);
        $contact = Contact::create($filedData);
        return redirect()->route('contacts');
    }
    public function contact_update(Request $request)
    {
        $filedData = $request->validate([
            'phone' => 'required|regex:/(01)[0-9]{9}/',
            'whatsapp' => 'required|regex:/(01)[0-9]{9}/',
            'email' => 'required|email',
            'google_map' => 'required',
            'address_en' => 'required',
            'address_ar' => 'required',
        ]);
        $contact =  Contact::first()->update($filedData);
        return redirect()->route('contacts');
    }
}
