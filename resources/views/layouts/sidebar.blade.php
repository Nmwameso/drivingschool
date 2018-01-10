<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset("dist/img/user2-160x160.jpg")}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
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

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATOR</li>
            <li class="active">
                <a href="{{ route('admin') }}">
                    <i class="fa fa-home"></i>
                    <span>DASHBOARD</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pencil-square-o"></i>
                    <span>MASTER ENTRIES</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/course') }}"><i class="fa fa-pencil-square-o"></i> COURSES</a></li>
                    <li><a href="{{ url('/student') }}"><i class="fa fa-graduation-cap"></i> STUDENTS</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-money"></i>
                    <span>STUDENTS FEES PAYMENT</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/fee') }}"><i class="fa fa-pencil-square-o"></i>MACHINE PAYMENT</a></li>
                    <li><a href="{{ url('/fee2') }}"><i class="fa fa-pencil-square-o"></i>BCE & FG PAYMENT</a></li>
                    <li><a href="{{ url('/fee3') }}"><i class="fa fa-pencil-square-o"></i>STATEMENT</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file"></i>
                    <span>EXAMINATION BOOKING</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/file') }}"><i class="fa fa-file"></i>PDL & TDB UPLOAD</a></li>
                    <li><a href="{{ url('/exams') }}"><i class="fa fa-pencil-square-o"></i>EXAMINATION DATE</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-certificate"></i>
                    <span>CERTIFICATES</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/recommendations') }}"><i class="fa fa-circle-o"></i>RECOMMENDATION</a></li>
                    <li><a href="{{ url('/attachments') }}"><i class="fa fa-certificate"></i>ATTACHMENT</a></li>
                    <li><a href="{{ url('/fee2') }}"><i class="fa fa-certificate"></i>BCE</a></li>
                    <li><a href="{{ url('/fee2') }}"><i class="fa fa-certificate"></i>FORKLIFT</a></li>
                    <li><a href="{{ url('/fee2') }}"><i class="fa fa-certificate"></i>BACKHOE</a></li>
                    <li><a href="{{ url('/fee2') }}"><i class="fa fa-certificate"></i>EXCAVATOR</a></li>
                    <li><a href="{{ url('/fee2') }}"><i class="fa fa-certificate"></i>SHOVEL</a></li>
                    <li><a href="{{ url('/fee2') }}"><i class="fa fa-certificate"></i>TELEHANDLER</a></li>
                    <li><a href="{{ url('/fee2') }}"><i class="fa fa-certificate"></i>HEALTH & SAFETY</a></li>

                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>