@component('admin.layouts.content' , ['title' => 'لیست محصولات'])
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">محصولات</h3>
                    <div class="card-tools d-flex">
                        <form action="">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="search" class="form-control float-right" placeholder="جستجو" value="{{ request('search') }}">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                        <div class="btn-group-sm mr-1">
                                <a href="{{ route('admin.products.create') }}" class="btn btn-info">ایجاد محصول جدید</a>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>آیدی محصول</th>
                                <th>نام محصول</th>
                                <th>تعداد موجودی</th>
                                <th>اقدامات</th>
                            </tr>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ $product->inventory }}</td>
                                    <td class="d-flex">
                                            <form action="{{ route('admin.products.destroy' , $product->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE') 
                                                <button type="submit" class="btn btn-sm btn-danger ml-1">حذف</button>
                                            </form>
                                            <a href="{{ route('admin.products.edit' , $product->id) }}" class="btn btn-sm btn-primary ml-1">ویرایش</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endcomponent
