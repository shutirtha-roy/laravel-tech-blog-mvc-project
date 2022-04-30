<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AboutContactMeController extends Controller{

    
    public function aboutMe() {
        return view('about.me');
    } 

    public function contact() {
        return view('about.contact');
    }

    public function addContact($request) {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $this->addContact($request);

        return Redirect()->back();
    }

    public function seeMessages(Request $request) {
        $all_contacts = Contact::all();
        return view('about.seeMessages', compact('all_contacts'));
    }

    public function deleteMessages(Request $request, $id) 
    {
        Contact::find($id)->delete();
        return Redirect()->back();
    }
}
