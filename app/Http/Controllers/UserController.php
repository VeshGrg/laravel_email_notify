<?php

namespace App\Http\Controllers;

use App\Models\Dailytransaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $user = null;
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }

    public function index()
    {
        $user = User::get();
        return view('user.index')
            ->with('users', $user);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'status' => 'required|in:active,inactive',
            'role' => 'required|in:admin,user,company'
        ]);
        $data = $request->except('password', 'password_confirmation');
        $data['password'] = Hash::make($request->password);
        $data['status'] = 'inactive';
        $user->fill($data);
        $user->save();
        return redirect()->route('users.index')
            ->with('success', 'User Added Successfully.');
    }

    public function show(User $user)
    {
        User::find($user);
        return view('user.show')
            ->with('user_detail', $user);
    }

    public function edit(User $user)
    {
        if (Gate::forUser($user)->allows('update', $user)) {
            // The user can update the post...
            return view('user.edit')
                ->with('user_data', $user);
        }
        abort(403);

    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required|in:active,inactive',
            'role' => 'required|in:admin,user,company'
        ]);
        $data = $request->except('_token');
        $user->fill($data);
        $user->save();
        return redirect()->route('landing')
            ->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        Gate::authorize('delete', $user);
        $user->delete();
        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully.');
    }

    public function changePassword(User $user)
    {
        User::findOrFail($user->id);
        return view('change-pass')->with('pass', $user);
    }

    public function updatePassword(Request $request, User $user)
    {
        //dd($user);
        if (!Hash::check($request->currentPassword, $user->password)){
            return back()->with([
                'msg_currentPassword' => 'Your current password does not matches with the password you provided! Please try again.'
            ]);
        }
        $request->validate([
            'currentPassword' => 'required',
            'password' => 'required|confirmed|min:8'
        ]);
        $user->password = bcrypt($request->password);
        $user->save();

        Auth::logout();
        return redirect()->route('landing');
    }
}
