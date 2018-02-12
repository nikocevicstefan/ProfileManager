<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Contact_Type;
use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{

    public function show(Person $person)
    {
        return view('Registration.userContact', compact('person'));
    }

    public function store(Person $person, Request $request)
    {
        $contact = new Contact();
        $contact->person_id = $person->id;
        $contact->contact_types_id = request('contact_type_id');
        $contact->name = Contact_Type::where('id', request('contact_type_id'))->value('type');
        $contact->value = request('name');
        $contact->save();
        $request->session()->flash('info', 'Contact was added!');

        return redirect()->action(
            'PersonController@show_user', ['person' => $person]
        );
    }

    public function delete(Contact $contact, Request $request)
    {
        $contact->delete();
        $request->session()->flash('error', 'Contact was deleted!');
        return back();
    }
}
