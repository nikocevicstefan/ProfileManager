@extends('layouts.master')


@section('content')

    <div class="row">
        <div class="col-12 text-center">
            <h1 style="color: #10C1F2">Contact info</h1>
        </div>
    </div>

    <div class="card" style="background: #dbebfb">
        <div class="card-body">
            <form action="/contact/edit/{{$person->id}}" method="POST">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-2">
                        <select name = "contact_type_id" class="custom-select">
                            <option value="1">Number</option>
                            <option value="2">Email</option>
                            <option value="3">Skype</option>
                            <option value="4">Facebook</option>
                        </select>
                    </div>

                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Contact here" name="name" required>
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