@component('admin.layouts.content' , ['title' => 'ایجاد محصول'])

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">فرم ایجاد محصول</h3>
                </div>
                <form class="form-horizontal" action="{{ route('admin.products.store') }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">نام محصول</label>
                            <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="نام محصول را وارد کنید" value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">توضیحات</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">قیمت</label>
                            <input type="number" name="price" class="form-control" id="inputPassword3" placeholder="قیمت را وارد کنید" value="{{ old('price') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">موجودی</label>
                            <input type="number" name="inventory" class="form-control" id="inputPassword3" placeholder="موجودی را وارد کنید" value="{{ old('inventory') }}">
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">آپلود تصویر شاخص</label>
                            <input type="text" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">دسته بندی ها</label>
                            <select class="form-control" name="categories[]" id="categories" multiple>
                                @foreach(\App\Models\Category::all() as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ثبت محصول</button>
                        <a href="{{ route('admin.products.index') }}" class="btn btn-default float-left">لغو</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endcomponent
