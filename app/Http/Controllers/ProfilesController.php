<?php

namespace App\Http\Controllers;

use App\Coupons;
use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {

        $user = User::findOrFail($user);
        $coupons = Coupons::whereIn('user_id', $user)->latest()->paginate(5);
        return view('index',[
            'user' => $user
        ]);
    }
}
