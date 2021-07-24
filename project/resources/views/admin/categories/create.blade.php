@component('admin.layouts.content' , ['title' => 'ایجاد دسته'])

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">فرم ایجاد دسته</h3>
                </div>
                <form class="form-horizontal" action="{{ route('admin.categories.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">دسته مرتبط</label>
                            <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="نام دسته را وارد کنید">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ثبت دسته</button>
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-default float-left">لغو</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endcomponent
