@extends('layouts.master')

@section('content')
    <div>
        <table class="table table-hover table-light" style="border-bottom-right-radius: 20px">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Email</th>
                <th class="text-center">Role</th>
                <th class="text-center">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                @if($user->admin == 0)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td><a href="/moderators/show/{{$user->id}}">{{$user->name}}</a></td>
                        <td>{{$user->email}}</td>
                        <td class="text-center"><a href="/moderators/{{$user->id}}"><img src="/svg/moderator.svg"  width="20" height="20"></a></td>
                        <td class="text-center">
                            <a href="/moderators/delete/{{$user->id}}"><img src="/svg/delete.svg"  width="20" height="20"></a>
                        </td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
@endsection