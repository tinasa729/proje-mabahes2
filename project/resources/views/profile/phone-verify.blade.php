@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Active Phone Number
                </div>

                <div class="card-body">
                <form action="{{url('/register') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="token">Code :</label>
                    <input type="text" class="form-control @error('token')is-invalid @enderror" name="token" placeholder="enter your code">
                </div>
                <div class="form-group">
                <button class="btn btn-primary">validate code</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
