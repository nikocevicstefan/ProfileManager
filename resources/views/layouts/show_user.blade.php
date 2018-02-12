@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-12" style="margin-right: 0">
            <form action="/persons/delete/{{$person->id}}" method="GET">
                {{csrf_field()}}
                <table class="table table-hover table-light">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>I</th>
                        <th>N</th>
                        <th>F</th>
                        <th>O</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <th scope="row">{{$person->id}}</th>
                        <td>{{$person->name}}</td>
                        <td>{{$person->surname}}</td>
                        <td>{{$person->age}}</td>

                        <td style="width:51px;">
                            <a href="/person/{{$person->id}}" ><img src="/svg/users.svg" width="20" height="20" ></a>
                        </td>

                        <td style="width:51px;">
                                <a href="/contact/{{$person->id}}"><img src="/svg/smartphone.svg" width="20" height="20" ></a>
                        </td>

                        @if($person->is_employee == 'Yes')
                            <td style="width:51px;">
                                <a href="/employee/{{$person->id}}"><img src="/svg/briefcase.svg" width="20" height="20" ></a>
                            </td>
                        @else
                            <td style="width:51px;">
                                <a href="/student/{{$person->id}}"><img src="/svg/agenda.svg" width="20" height="20" ></a>
                            </td>
                        @endif

                        @if($person->has_car == 'Yes' && $person->drivers_permit == 'Yes')
                            <td style="width:51px;">
                                <a href="/car/{{$person->id}}"><img src="/svg/car.svg" width="20" height="20" ></a>
                            </td>
                        @else
                            <td><img src="/svg/prohibition.svg" width="20" height="20"></td>
                        @endif

                    </tr>


                    </tbody>
                </table>

                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12 text-center"><h2 style="color: #10C1F2">Contacts</h2></div>
                        </div>
                        <table class="table table-hover table-light" >
                            @if(!count($person->contact))
                                <tr>
                                    <td>Input some contact info</td>
                                </tr>
                            @else
                                @foreach($person->contact as $contact)
                                    <tr>
                                        <td>{{$contact->name.": ".$contact->value}}</td>
                                        <td style="width: 51px" class="text-right">
                                            <a href="/contact/delete/{{$contact->id}}"><img src="/svg/delete.svg" width="20" height="20" ></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </table>
                    </div>

                    <div class="col-6">
                        <div class="row">
                            <div class="col-12 text-center"><h2 style="color: #10C1F2">Vehicles</h2></div>
                        </div>
                        <table class="table table-hover table-light">
                            @if($person->drivers_permit == 'No' || $person->has_car == 'No')
                                <tr>
                                    <td>{{$person->name}} doesn't have a drivers permit or a car</td>
                                </tr>
                            @elseif(!count($person->car))
                                <tr>
                                    <td>Enter some vehicle data about {{$person->name}}.</td>
                                </tr>
                            @else
                                @foreach($person->car as $car)
                                    <tr>
                                        <td>{{$car->brand." ".$car->model}}</td>
                                        <td style="width: 51px" class="text-right">
                                            <a href="/car/delete/{{$car->id}}"><img src="/svg/delete.svg" width="20" height="20" ></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </table>
                    </div>


                </div>

                <hr>
                <div class="row">
                    <div class="col-12 text-right text-center">
                        <button type="submit" class="btn btn-outline-danger">Delete user</button>
                    </div>
                </div>
            </form>


        </div>
    </div>
@endsection