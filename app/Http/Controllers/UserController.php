<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $user = null;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = $this->user->get();
        return view('home')
            ->with('users', $user);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
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
        $this->user->fill($data);
        $this->user->save();
        return redirect()->route('home')
            ->with('success', 'User Added Successfully.');
    }

    public function show($user)
    {
        $this->user = $this->user->find($user);
        return view('user.show')
            ->with('user_detail', $this->user);
    }

    public function edit($user)
    {
        //die('hi');
        $this->user = $this->user->find($user);
        return view('user.edit')
            ->with('user_data', $this->user);
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
        return redirect()->route('home')
            ->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('home')
            ->with('success', 'User deleted successfully.');
    }
}
