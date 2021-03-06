<nav class="navbar navbar-expand">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav">
        <li class="nav-item small-screens-sidebar-link">
            <a href="#" class="nav-link">
                <i class="material-icons-outlined">menu</i>
            </a>
        </li>
        <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset('adminStyle/assets/images/avatars/profile-image-1.png') }}" alt="profile image">
                <span>{{ Auth::guard('admin')->user()->name }}</span>
                <i class="material-icons dropdown-icon">keyboard_arrow_down</i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                {{-- <a class="dropdown-item" href="{{URL::to('admin/change-details')}}">Change Details</a> --}}
                <a class="dropdown-item" href="{{ Route('admin.password')  }}">Change Password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ Route('admin.logout') }}">Log out</a>
            </div>
        </li>
    </ul>
</nav>
