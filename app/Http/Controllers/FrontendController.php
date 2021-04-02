<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Brian2694\Toastr\Facades\Toastr;
use sweetalert;


class FrontendController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('contect');
    }

    public function store(Request $request)
    {


        $contact = new Contact();
        $contact->service_area = $request->service_area;
        $contact->requirements = $request->requirements;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->country_code = $request->country_code;
        $contact->number = $request->number;
        $contact->company_name = $request->company_name;
        $contact->company_type = $request->company_type;
        $contact->website = $request->website;
        $contact->address = $request->address;
        $contact->social_type = $request->social_type;
        $contact->network_id = $request->network_id;

        $contact->save();
        Toastr::success('Thank you for your message');

        return redirect()->back();
    }
}
