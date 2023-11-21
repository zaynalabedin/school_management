<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('public/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">School Management</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('public/images/image-1.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav me-auto nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{ route('home') }}" class="nav-link active">
                        {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                        <p>
                            Dashboard
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ Route('teachers.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Teachers</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" aria-expanded="false" role="button">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Students <i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview ">
                                <li class="nav-item"><a class="nav-link active" href="{{ Route('students.classSixStudents') }}"><i class="fa fa-arrow-right"></i>  ৬ষ্ঠ শ্রেণী</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ Route('students.classSeven') }}"><i class="fa fa-arrow-right"></i>  ৭ম শ্রেণী</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ Route('students.classEight') }}"><i class="fa fa-arrow-right"></i>  ৮ম শ্রেণী</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ Route('students.classNine') }}"><i class="fa fa-arrow-right"></i>  ৯ম শ্রেণী</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ Route('students.classTen') }}"><i class="fa fa-arrow-right"></i>  ১০ম শ্রেণী</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ Route('courses.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Classes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('sections.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sections</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ Route('subjects.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Subjects</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('exams.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Exams</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Marks</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Exam Questions</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Notice</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Routine</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ Route('departments.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Teacher Department</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ Route('designations.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Teacher Designation</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ Route('groups.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Student Group</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>President</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Vice-President</p>
                            </a>
                        </li>

                    </ul>
                </li>









            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
