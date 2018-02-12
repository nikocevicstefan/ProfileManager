<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Person;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function show(Person $person)
    {
        return view('Registration.employeeData', compact('person'));
    }

    private function validate_data(Request $request)
    {

        $request->validate([
            'work_years' => 'required|numeric|max:100',
        ]);

    }

    public function show_data(Person $person, Request $request)
    {

        $this->validate_data($request);

        $person->employee->person_id = $person->id;
        $person->employee->company_name = request('company_name');
        $person->employee->work_field = request('work_field');
        $person->employee->position = request('position');
        $person->employee->work_years = request('work_years');

        $person->employee->update();
        $request->session()->flash('info','Employee info successfully updated');
        return redirect()->action(
            'PersonController@show_user', ['person' => $person]
        );
    }


    public function store(Person $person, Request $request)
    {

        $this->validate_data($request);

        $employee = new Employee();
        $employee->person_id = $person->id;
        $employee->company_name = request('company_name');
        $employee->work_field = request('work_field');
        $employee->position = request('position');
        $employee->work_years = request('work_years');

        $employee->save();
        $request->session()->flash('info','Employee info successfully added');
        return redirect()->action(
            'PersonController@show_user', ['person' => $person]
        );
    }
}
