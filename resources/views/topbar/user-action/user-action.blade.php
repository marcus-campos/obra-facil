@section('user-action')
    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="user-img" class="img-circle"> </a>
    <ul class="dropdown-menu">
        <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
        <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
        <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
        <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
    </ul>
@endsection