@extends('profile.layouts')

@section('main')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">فرم ویرایش </h3>
                </div>
                
                <form class="form-horizontal" action="{{ route('admin.users.update', ['user' => auth()->user()->id]) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">نام : </label>
                            <input type="text" name="name" class="form-control" id="inputEmail3" value="{{ auth()->user()->name }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">ایمیل :</label>
                            <input type="email" name="email" class="form-control" id="inputEmail3" value="{{auth()->user()->email}}">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">رمز عبور :</label>
                            <input type="password" name="password" class="form-control" id="inputPassword3" >
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">تکرار رمز عبور :</label>
                            <input type="password" name="password_confirmation" class="form-control" id="inputPassword3" >
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">تلفن  : </label>
                            <input type="text" name="password_confirmation" class="form-control" id="inputPassword3"  value="{{auth()->user()->phone_number}}">
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a href="" class="btn btn-default float-left">لغو</a>
                        <button type="submit" class="btn btn-info">ویرایش</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>
@endsection
