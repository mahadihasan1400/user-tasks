<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search.">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{url('/home')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>

            <li>
                <a href="#"><i class="fa fa-compass fa-fw"></i>Category Info<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/add-category')}}">Add Category</a>
                    </li>
                    <li>
                        <a href="{{url('/manage-category')}}">Manage Category</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>My Task<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/add-task')}}">Add Task</a>
                    </li>
                    <li>
                        <a href="{{url('/manage-task')}}">Manage Task</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>




            <li>
                <a href="#"><i class="fa fa-bell fa-fw"></i>Product Info<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/add-product')}}">Add Product</a>
                    </li>
                    <li>
                        <a href="{{url('/manage-product')}}">Manage Product</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-calendar-minus-o fa-fw"></i>Slide Info<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/add-slider')}}">Add Slider</a>
                    </li>
                    <li>
                        <a href="{{url('/manage-slider')}}">Manage Slider</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{url('/order-info')}}"><i class="fa fa-compass fa-fw"></i>Order Info<span></span></a>

                <!-- /.nav-second-level -->
            </li>

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->