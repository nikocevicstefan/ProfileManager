@extends('layouts.master')


@section('content')

    <div class="row">
        <div class="col-12 text-center">
            <h1 style="color: #10C1F2">Personal info</h1>
        </div>
    </div>

    <div class="card" style="background: #dbebfb">
        <div class="card-body">
            <form autocomplete="off" method="POST" action="/person">
                {{csrf_field()}}
                <div class="row">
                    <div class="form-group col-6">
                        <h6>Name:</h6>
                        <input class="form-control" type="text" placeholder="Name here" name="name" required>
                    </div>

                    <div class="form-group col-6">
                        <h6>Surname:</h6>
                        <input class="form-control" type="text" placeholder="Surname here" name="surname" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <h6>Gender:</h6>
                        <div class="ht-tm-element custom-control custom-radio">
                            <input type="radio" id="customRadio0" name="gender" value="Male" class="custom-control-input radio-inline" required>
                            <label class="custom-control-label" for="customRadio0">Male</label>
                        </div>

                        <div class="ht-tm-element custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="gender" value="Female" class="custom-control-input radio-inline" required>
                            <label class="custom-control-label" for="customRadio1">Female</label>
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <h6>Age:</h6>
                        <input class="form-control" type="text" placeholder="Age here" name="age" required>
                    </div>
                </div>

                <div class="form-group">
                    <h6>JMBG:</h6>
                    <input class="form-control" type="text" placeholder="JMBG here" name="JMBG" required>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <h6>Place of birth</h6>
                        <input class="form-control" type="text" placeholder="Place of birth here" name="place_of_birth" required>
                    </div>

                    <div class="form-group col-6">
                        <h6>Country</h6>
                        <input class="form-control" type="text" placeholder="Country here" name="country" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <h6>City</h6>
                        <input class="form-control" type="text" placeholder="City here" name="city" required>
                    </div>

                    <div class="form-group col-6">
                        <h6>Address</h6>
                        <input class="form-control" type="text" placeholder="Address here" name="address" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <h6>Do you have a drivers licence:</h6>
                        <div class="ht-tm-element custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="drivers_permit" class="custom-control-input" value="Yes">
                            <label class="custom-control-label" for="customRadio2">Yes</label>
                        </div>
                        <div class="ht-tm-element custom-control custom-radio">
                            <input type="radio" id="customRadio3" name="drivers_permit" class="custom-control-input" value="No">
                            <label class="custom-control-label" for="customRadio3">No</label>
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <h6>Do you have a car:</h6>
                        <div class="ht-tm-element custom-control custom-radio">
                            <input type="radio" id="customRadio4" name="has_car" class="custom-control-input" value="Yes">
                            <label class="custom-control-label" for="customRadio4">Yes</label>
                        </div>
                        <div class="ht-tm-element custom-control custom-radio">
                            <input type="radio" id="customRadio5" name="has_car" class="custom-control-input" value="No">
                            <label class="custom-control-label" for="customRadio5">No</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <h6>Pick your category:</h6>
                        <div class="ht-tm-element custom-control custom-radio">
                            <input type="radio" id="customRadio8" name="is_employee" class="custom-control-input" value="Yes">
                            <label class="custom-control-label" for="customRadio8">Employee</label>
                        </div>
                        <div class="ht-tm-element custom-control custom-radio">
                            <input type="radio" id="customRadio9" name="is_employee" class="custom-control-input" value="No">
                            <label class="custom-control-label" for="customRadio9">Student</label>
                        </div>
                    </div>
                    <div class="form-group col-6 text-right">
                        <button type="submit" class="btn btn-shadow btn-info" style="margin-top: 35px">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>



@endsection