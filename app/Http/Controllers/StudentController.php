<?php

namespace App\Http\Controllers;

use App\Person;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show(Person $person)
    {
        return view('Registration.studentData', compact('person'));
    }

    private function validate_data(Request $request)
        {
            $request->validate([
                'study_year' => 'required|numeric|max:50'
            ]);
        }

    public function show_data(Person $person, Request $request)
    {
        $this->validate_data($request);

        $person->student->person_id = $person->id;
        $person->student->index = request('index');
        $person->student->study_year = request('study_year');
        $person->student->study_programme = request('study_programme');
        $person->student->avg_grade = request('avg_grade');

        $person->student->update();
        $request->session()->flash('info','Student info successfully updated');

        return redirect()->action(
            'PersonController@show_user', ['person' => $person]
        );
    }

    public function store(Person $person, Request $request)
    {
        $this->validate_data($request);

        $student = new Student();
        $student->person_id = $person->id;
        $student->index = request('index');
        $student->study_year = request('study_year');
        $student->study_programme = request('study_programme');
        $student->avg_grade = request('avg_grade');

        $student->save();
        $request->session()->flash('info','Student info successfully added');

        return redirect()->action(
            'PersonController@show_user', ['person' => $person]
        );
    }
}
