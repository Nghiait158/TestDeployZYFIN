<?php

namespace App\Http\Controllers;
use App\Models\InformationContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
class InformationContactConttroller extends Controller
{
    public function saveinfoContact(Request $request){
        $request->validate([
            'contactName' => 'required|string|max:255',
            'contactEmail' => 'required|email',
            'contactCompany' => 'required|string|max:255',
            'contactSupport' => 'required|string',
            'contactDetails' => 'required|string',
        ]);
        $data = $request->all();
        $contact = new InformationContact();

        $contact->contact_name = $data['contactName']; 
        $contact->contact_email = $data['contactEmail']; 
        $contact->contact_country = $data['contactCountry'];
        $contact->contact_company = $data['contactCompany'];
        $contact->contact_support = $data['contactSupport'];
        $contact->contact_details = $data['contactDetails'];
    
        $contact->save();

        Session::put('message','Save contact successfully!!!');
        return Redirect::to('');
    }
}
