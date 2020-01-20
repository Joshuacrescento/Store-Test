@extends('layouts.app')

@section('content')

<div class="container"> 
<?php foreach($user->coupons as $item): ?>
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Codigo:    {{$item->coupon}}</h5>
                        <p class="card-text">Puntos:    {{$item->points}}</p>
                    </div>
                    </div>
    <?php endforeach; ?>
            </div>
@endsection
