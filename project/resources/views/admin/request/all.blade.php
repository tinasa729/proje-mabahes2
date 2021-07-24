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
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>آیدی کاربر </th>
                                <th>نام محصول</th>
                                <th>وضعیت</th>
                                <th>اقدامات</th>
                            </tr>

                            @foreach($books as $book)
                                <tr>
                                    <td>{{ $book->user_id }}</td>
                                    <td>{{ $book->name }}</td>
                                    <th>{{ $book->status }}</th>
                                    <td class="d-flex">
                                    @if( $book->status!='confirm')
                                    
                                    <!-- <a href="{{route('admin.requestbooks.update', $book->id) }}"> <button class="btn btn-sm ml-1 btn-success"> تایید درخواست</button></a> -->
                                    <form action="{{route('admin.requestbooks.update' , $book->id) }}" method="post">
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn btn-sm ml-1 btn-success"> تایید درخواست</button>
                                    </form>
                                    <form action="{{route('admin.requestbooks.destroy' , $book->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm ml-1 btn-danger"> رد درخواست</button>
                                    </form>
                                    @endif
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
