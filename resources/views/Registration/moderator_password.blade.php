@extends('layouts.master')

@section('content')
    <div>
        <form action="/moderators/changepass/{{$user->id}}" method="POST">
            {{csrf_field()}}
            <h3>Change password for {{$user->name}}</h3>
            <input type="password" placeholder="New password" name="password" class="form-control col-4" required>
            <button type="submit" class="btn btn-shadow btn-success text-right" style="margin-top: 20px">Submit</button>
        </form>
    </div>
@endsection