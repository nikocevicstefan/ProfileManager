{{--
* Redni broj studenta (index)
* Godina studija
* Studijski program
* Srednja ocijena--}}
@extends('layouts.master')

@section('content')

    <h1>Personal info</h1>
    @if($person->student == NULL)
        <div class="card" style="background: #dbebfb">
            <div class="card-body">
                <form autocomplete="off" action="/student/edit/{{$person->id}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group col-6">
                        <h6>Index number:</h6>
                        <input class="form-control" type="text" placeholder="Index number here" name="index" required>
                    </div>
                    <div class="form-group col-6">
                        <h6>Year of study:</h6>
                        <input class="form-control" type="text" placeholder="Year of study here" name="study_year" required>
                    </div>
                    <div class="form-group col-6">
                        <h6>Study programme:</h6>
                        <input class="form-control" type="text" placeholder="Study programme here" name="study_programme" required>
                    </div>
                    <div class="form-group col-6">
                        <h6>Average grade:</h6>
                        <input class="form-control" type="text" placeholder="Average grade here" name="avg_grade" required>
                    </div>

                    <button type="submit" class="btn btn-shadow btn-info" style="margin-left: 19px">Submit</button>

                </form>
            </div>
        </div>
    @else
        <div class="card" style="background: #dbebfb">
            <div class="card-body">
                <form autocomplete="off" action="/student/show/{{$person->id}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group col-6">
                        <h6>Index number:</h6>
                        <input class="form-control" type="text" value="{{$person->student->index}}" name="index" required>
                    </div>
                    <div class="form-group col-6">
                        <h6>Year of study:</h6>
                        <input class="form-control" type="text" value="{{$person->student->study_year}}" name="study_year" required>
                    </div>
                    <div class="form-group col-6">
                        <h6>Study programme:</h6>
                        <input class="form-control" type="text" value="{{$person->student->study_programme}}" name="study_programme" required>
                    </div>
                    <div class="form-group col-6">
                        <h6>Average grade:</h6>
                        <input class="form-control" type="text" value="{{$person->student->avg_grade}}" name="avg_grade" required>
                    </div>

                    <button type="submit" class="btn btn-shadow btn-info" style="margin-left: 19px">Submit</button>

                </form>
            </div>
        </div>
    @endif

@endsection