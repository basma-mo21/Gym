<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          
        </div>
        <div class="sidebar-brand-text mx-3"> Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->



 
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Sectiones
    </div>

   

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.members')}}">
            <i class="fas fa-user"></i>
            <span>Members</span></a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.masseges')}}">
            <i class="fas fa-file-signature"></i>
            <span>Masseges</span></a>
    </li>


    
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.addcoach')}}">
            <i class="fas fa-biking"></i>
            <span>Add Coach</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.showcoach')}}">
            <i class="fas fa-eye"></i>
            <span>Show Coaches</span></a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.addclass')}}">
            <i class="	fa fa-plus"></i>
            <span>Add Class</span></a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.showclass')}}">
            <i class="fa fa-binoculars"></i>
            <span>Show Class</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    

</ul>
<!-- End of Sidebar -->