@extends('layouts.master')


@section('content')
    <div class="card" style="background: #dbebfb">
        <div class="card-body">
            <form action="/car/edit/{{$person->id}}" method="POST">
                {{csrf_field()}}

                <div class="row">
                    <div class="col-12 text-center">
                        <h1 style="color: #10C1F2">Vehicle info</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <h6>Brand:</h6>
                        <input class="form-control" type="text" placeholder="Car brand here" name="brand">
                    </div>

                    <div class="form-group col-6">
                        <h6>Model:</h6>
                        <input class="form-control" type="text" placeholder="Car model here" name="model">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <h6>Year:</h6>
                        <input class="form-control" type="text" placeholder="Car year here" name="car_year">
                    </div>

                    <div class="form-group col-6">
                        <h6>Pick vehicle category:</h6>
                        <select name = "car_type_id" class="custom-select">
                            <option value="1">Sedan</option>
                            <option value="2">Station-wagon</option>
                            <option value="3">Limousine</option>
                            <option value="4">Hatchback</option>
                            <option value="5">SUV</option>
                            <option value="6">Transport</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">

                    </div>
                    <div class="form-group col-6 text-right">
                        <button type="submit" class="btn btn-shadow btn-info" style="margin-top: 40px">Submit</button>
                    </div>
                </div>
            </form>


        </div>
    </div>

@endsection