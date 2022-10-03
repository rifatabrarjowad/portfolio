<div class="container-fluid jumbotron mt-5 ">
    <div class="row">
        <div class="col-md-6 justify-content-center">
            <div class="m-lg-5 m-md-5 p-lg-5 m-sm-3 p-sm-3 p-md-5">
                <h1 class="top-banner-title text-justify">Afirahi Soft</h1>
                <h1 class="top-banner-subtitle text-justify">
                    ব্লগ পড়ুন বাংলাতে
                </h1>
                <h1 class="top-banner-subtitle2 text-justify">
                    সব ধরণের ব্লগ পাবেন এইখানে
                </h1>
                @php
                $siteInfo =\App\Models\MoreModel::find(2);
                @endphp
                <a target="_blank" href="{{$siteInfo->more_des}}"><img class="" src="/images/playbtn.svg" /></a>
            </div>
        </div>
        <div class="col-md-6">
            <img class="top-banner-img  animated fadeIn" src="images/bannerImg.png">
        </div>
    </div>
</div>