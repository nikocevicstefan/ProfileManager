<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use App\Person;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{

    private function validate_data(Request $request)
    {
        $request->validate([
            'car_year' => 'required|numeric|between:1800,2018'
        ]);
    }

    public function store(Person $person, Request $request)
    {

        $this->validate_data($request);

        $car = new Car();
        $car->person_id = $person->id;
        $car->car_type_id = request('car_type_id');
        $car->brand = request('brand');
        $car->model= request('model');
        $car->car_year= request('car_year');
        $car->save();
        $request->session()->flash('info', 'Car was added!');

        return redirect()->action(
            'PersonController@show_user', ['person' => $person]
        );
    }

    public function show(Person $person)
    {
        return view('Registration.userVehicle', compact('person'));
    }

    public function delete(Car $car, Request $request)
    {
        $car->delete();
        $request->session()->flash('error', 'Car was deleted!');
        return back();
    }
}
