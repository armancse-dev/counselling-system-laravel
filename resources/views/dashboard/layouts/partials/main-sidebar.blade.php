<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('dashboard/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ 'BSDI' }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="{{url('/')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-binoculars"></i>
                <span>Counsel</span>
                <span class="pull-right-container">
          {{--<span class="label label-primary pull-right">{{$total_counsel}}</span>--}}
        </span>
            </a>
            <ul class="treeview-menu active">
                <li class=""><a href="{{route('counsel.create')}}"><i class="fa fa-plus-square"
                                                                      aria-hidden="true"></i>Add Counsel</a></li>
                <li class=""><a href="{{route('counsel.index')}}"><i class="fa fa-eye"
                                                                      aria-hidden="true"></i>Show Counsels</a></li>

            </ul>
        </li>



            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bullhorn"></i>
                    <span>Discussion</span>
                    <span class="pull-right-container">
              {{--<span class="label label-primary pull-right">{{$total_discussion}}</span>--}}
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{route('discussion.create')}}"><i class="fa fa-plus-square"
                                                                     aria-hidden="true"></i> Entry Form</a></li>

                    <li class=""><a href="{{route('discussion.index')}}"><i class="fa fa-eye"
                                                                         aria-hidden="true"></i> View All</a></li>

                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->