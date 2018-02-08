@if (Auth::guard('web')->check())
    <li><a href="{{ route('user.logout') }}">User Logout</a></li>
@endif

@if (Auth::guard('admin')->check())
    <li><a href="{{ route('admin.logout') }}">Admin Logout</a></li>
@endif
