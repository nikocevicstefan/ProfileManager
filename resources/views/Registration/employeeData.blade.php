@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-12 text-center">
            <h1 style="color: #10C1F2">Employee info</h1>
        </div>
    </div>

    @if($person->employee == NULL)
        <div class="card" style="background: #dbebfb">
            <div class="card-body">
                <form autocomplete="off" method="POST" action="/employee/edit/{{$person->id}}">
                    {{csrf_field()}}
                    <div class="form-group col-6">
                        <h6>Company Name:</h6>
                        <input class="form-control" type="text" placeholder="Company name here" name="company_name" required>
                    </div>
                    <div class="form-group col-6">
                        <h6>Field of work:</h6>
                        <input class="form-control" type="text" placeholder="Field of work here" name="work_field" required>
                    </div>
                    <div class="form-group col-6">
                        <h6>Current position:</h6>
                        <input class="form-control" type="text" placeholder="Your work title here" name="position" required>
                    </div>
                    <div class="form-group col-6">
                        <h6>Years spent working:</h6>
                        <input class="form-control" type="text" placeholder="Number of years here" name="work_years" required>
                    </div>

                    <button type="submit" class="btn btn-shadow btn-info" style="margin-left: 19px">Submit</button>

                </form>
            </div>
        </div>

    @else

        <div class="card" style="background: #dbebfb">
            <div class="card-body">
                <form autocomplete="off" method="POST" action="/employee/show/{{$person->id}}">
                    {{csrf_field()}}
                    <div class="form-group col-6">
                        <h6>Company Name:</h6>
                        <input class="form-control" type="text" value="{{$person->employee->company_name}}" name="company_name" required>
                    </div>
                    <div class="form-group col-6">
                        <h6>Field of work:</h6>
                        <input class="form-control" type="text" value="{{$person->employee->work_field}}" name="work_field" required>
                    </div>
                    <div class="form-group col-6">
                        <h6>Current position:</h6>
                        <input class="form-control" type="text" value="{{$person->employee->position}}" name="position" required>
                    </div>
                    <div class="form-group col-6">
                        <h6>Years spent working:</h6>
                        <input class="form-control" type="text" value="{{$person->employee->work_years}}" name="work_years" required>
                    </div>

                    <button type="submit" class="btn btn-shadow btn-info" style="margin-left: 19px">Submit</button>

                </form>
            </div>
        </div>

    @endif

@endsection