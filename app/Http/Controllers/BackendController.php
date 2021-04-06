<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function contact()
    {
        $contacts = Contact::orderBy('id','desc')->get();

        return view('backend.pages.Contact.manage',compact('contacts'));
    }
}
