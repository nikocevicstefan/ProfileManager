@extends('layouts.master')

@section('content')
    <div>
        <table class="table table-hover table-light" style="border-bottom-right-radius: 20px">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                @if($user->admin == 1)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @if($user->id != 1)
                            <a href="/moderators/{{$user->id}}"><img src="/svg/admin.svg" width="20" height="20"></a>
                            @else
                               <img src="/svg/admin.svg" width="20" height="20">
                            @endif
                        </td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
@endsection