@extends('layouts.app')
<?php
$total = 0;
foreach($user->coupons as $item){
    $total += $item->points;
}
?>
@section('content')
<div class="container">
            <div id="profileShell" data-points= {{ $total }} data-name= {{ $user->name }}></div>

    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
                <div class="card-group">
    <?php foreach($user->posts as $item): ?>
                    <div class="card">
                        <img class="card-img-top" src="/storage/{{$item->path}}" alt="Card image cap"/>
                    <div class="card-body">
                        <h5 class="card-title">{{$item->title}}</h5>
                    </div>
                    </div>
    <?php endforeach; ?>
                </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/app.js"></script>
@endsection
