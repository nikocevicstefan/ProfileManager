@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-6">
            <h1 class="text-center" style="color: #10C1F2">Employees</h1>
                <table class="table table-hover table-light" style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($persons as $person)
                        @if($person->is_employee == 'Yes')
                            <tr>
                                <th scope="row">{{$person->id}}</th>
                                <td><a href="/persons/{{$person->id}}">{{$person->name}}</a></td>
                                <td>{{$person->surname}}</td>
                                <td>{{$person->age}}</td>
                            </tr>
                         @endif
                    @endforeach
                    </tbody>
                </table>
         </div>
        <div class="col-6">
            <h1 class="text-center" style="color: #10C1F2">Students</h1>
            <table class="table table-hover table-light" style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                </tr>
                </thead>
                <tbody>
                @foreach($persons as $person)
                    @if($person->is_employee == 'No')
                        <tr>
                            <th scope="row">{{$person->id}}</th>
                            <td><a href="/persons/{{$person->id}}">{{$person->name}}</a></td>
                            <td>{{$person->surname}}</td>
                            <td>{{$person->age}}</td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection