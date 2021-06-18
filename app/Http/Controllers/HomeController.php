<?php

namespace App\Http\Controllers;

use App\Mail\ShareClPriceNotification;
use App\Models\Dailytransaction;
use App\Models\Share;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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

    public function edit()
    {
        //die('hi');
        $user = User::find();
        return view(route('register'))
            ->with('user_data', $user);
    }

}
