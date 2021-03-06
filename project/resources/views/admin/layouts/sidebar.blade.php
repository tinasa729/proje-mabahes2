<aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <span class="brand-text font-weight-light">پنل مدیریت</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar" style="direction: ltr">
            <div style="direction: rtl">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name}}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <!-- <li class="nav-item">
                            <a href="{{route('admin.')}}" class="nav-link">
                            <i class="fa fa-circle-o nav-icon text-info"></i>
                                <p>
                                    پنل مدیریت
                                </p>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="{{route('admin.users.index')}}" class="nav-link">
                            <i class="fa fa-circle-o nav-icon text-info"></i>
                                <p>
                                    لیست کاربران
                                </p>
                            </a>
                        </li>
                            <li class="nav-item">
                                <a href="{{route('admin.products.index')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon text-info"></i>
                                    <p>
                                        محصولات
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.categories.index')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon text-info"></i>
                                    <p>
                                        دسته بندی‌ها
                                    </p>
                                </a>
                            </li>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-circle-o nav-icon text-info"></i>
                                <p> سفارشات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.requestbooks.index')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon text-info"></i>
                                <p> درخواست ها</p>
                            </a>
                        </li>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
        </div>
        <!-- /.sidebar -->
    </aside>