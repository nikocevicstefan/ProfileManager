<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Person;


class PersonController extends Controller
{
    public function index()
    {
        $persons = DB::table('persons')->get();
        return view('layouts.index', compact('persons'));
    }

    public function register()
    {
        return view('Registration.userData');
    }

    public function edit_register(Person $person)
    {
        return view('layouts.editUserData', compact('person'));
    }

    public function show_user(Person $person)
    {
        return view('layouts.show_user', compact('person'));
    }

    public function delete(Person $person, Request $request)
    {
        $person->delete();
        DB::table('contacts')->where('person_id', $person->id)->delete();
        DB::table('cars')->where('person_id', $person->id)->delete();
        DB::table('employees')->where('person_id', $person->id)->delete();
        DB::table('students')->where('person_id', $person->id)->delete();

        $request->session()->flash('error', 'User was deleted!');
        return redirect('/persons');
    }

    private function validate_data(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'surname' => 'required|max:100',
            'JMBG' => 'required|numeric',
            'age'=>'required|between:0,200|numeric',
            'place_of_birth'=>'required',
            'country'=>'required',
            'city'=>'required',
            'address'=>'required',
        ]);
    }

    public function store(Request $request)
    {

        $this->validate_data($request);

        $person = new Person();

        $person->name = request('name');
        $person->surname = request('surname');
        $person->JMBG = request('JMBG');
        $person->age = request('age');
        $person->gender = request('gender');
        $person->place_of_birth = request('place_of_birth');
        $person->country = request('country');
        $person->city = request('city');
        $person->address = request('address');
        $person->is_employee = request('is_employee');
        $person->drivers_permit = request('drivers_permit');
        $person->has_car = request('has_car');

        $person->save();

        $request->session()->flash('success', 'User was successfully added!');
        return redirect()->action(
            'PersonController@show_user', ['person' => $person]
        );
    }

    public function edit(Person $person, Request $request)
    {

        $this->validate_data($request);

        $person->name = request('name');
        $person->surname = request('surname');
        $person->JMBG = request('JMBG');
        $person->age = request('age');
        $person->gender = request('gender');
        $person->place_of_birth = request('place_of_birth');
        $person->country = request('country');
        $person->city = request('city');
        $person->address = request('address');
        $person->is_employee = request('is_employee');
        $person->drivers_permit = request('drivers_permit');
        $person->has_car = request('has_car');

        $person->update();

        $request->session()->flash('success', 'User info was successfully updated!');
        return redirect()->action(
            'PersonController@show_user', ['person' => $person]
        );
    }



}
