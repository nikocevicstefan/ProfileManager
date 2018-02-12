<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        return view('layouts.moderators_index', compact('users'));
    }

    public function index_admin()
    {
        $users = DB::table('users')->get();
        return view('layouts.admins_index', compact('users'));
    }

    public function delete(User $user, Request $request)
    {
        $user->delete();
        $request->session()->flash('error', 'Moderator was deleted!');
        return back();
    }

    public function role_change(User $user, Request $request)
    {

        $user->admin = !($user->admin);

        $user->update();
        $request->session()->flash('info', 'Users role was changed!');
        return back();
    }

    public function show_pass(User $user)
    {
        return view('Registration.moderator_password', compact('user'));
    }

    public function change_pass(User $user, Request $request)
    {
        $user->password = bcrypt(request('password'));
        $user->save();
        $request->session()->flash('warning', 'Moderator password is changed!');
        return redirect('/moderators');
    }
}
