@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="card">
        <div class="card-header">
            <h3> درخواست کتاب</h3>
        </div>
        <div class="card-body">
            <form action="{{route('RequestBook.store')}}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="inputname" class="col-sm-2 control-label"> نام کتاب درخواستی : </label>
                    <input type="text" name="name" class="form-control" id="inputname" placeholder="نام محصول را وارد کنید">
                </div>
                <input type="submit" name="submit" class="btn btn-primary" value="ثبت">
            </form>
        </div>
    </div>
    </div>
@endsection

