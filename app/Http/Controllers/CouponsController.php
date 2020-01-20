<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CouponsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $data = request()->validate([
            'coupon'=>'required',
            'points'=>'required'
        ]);

        auth()->user()->coupons()->create($data);

        return redirect('/profile/' . auth()->user()->id);
    }

    public function show($user)
    {
        
        $user = User::findOrFail($user);
        return view('show',[
            'user' => $user
        ]);
    }
}
