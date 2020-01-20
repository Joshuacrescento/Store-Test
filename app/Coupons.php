<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function coupons()
    {
        return $this->hasOne(Coupons::class);
    }

    public function show()
    {
        # code...
        return redirect('/codes/' . auth()->user()->id);    }
}
