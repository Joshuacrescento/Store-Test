@extends('layouts.app')

@section('content')

<div class="container"> 
            
                <form action="/p" method="post">
            @csrf

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">CODIGO</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" name="coupon" required/>
                            </div>

                            <div class="col-md-6">
                                <input id="number" type="number" class="form-control" name="points" required/>
                            </div>
                        </div>

                        <button>Submit</button>

                </form>
            
            </div>
@endsection
