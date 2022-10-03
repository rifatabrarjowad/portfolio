@php
$siteInfo =\App\Models\MoreModel::find(1);
@endphp

<nav class="navbar fixed-top nav-before navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/')}}"><img style="width:80px !important" class="nav-logo"
            src="http://admin.afirahisoft.xyz/uploads/mores/{{$siteInfo->more_des}}" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-3 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link nav-font" href="{{url('/')}}">হোম </a>
            </li>


            <li class="nav-item">
                <a class="nav-link nav-font" href="{{url('/site/allBlog')}}">ব্লগ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-font" href="{{url('/site/contactTo')}}">যোগাযোগ</a>
            </li>

        </ul>
        @php
        $siteInfo =\App\Models\MoreModel::find(4);
        @endphp
        <form class="form-inline my-2 my-lg-0">
            <a href="{{$siteInfo->more_des}}" class="normal-btn btn">ফলো</a>
        </form>
    </div>
</nav>