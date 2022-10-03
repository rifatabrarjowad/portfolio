<div class="container section-marginTop text-center">
    <h1 class="section-title">সাম্প্রতিক ব্লগ</h1>
    <h1 class="section-subtitle">
        আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল সার্ভিস আমরা প্রদান
        করি
    </h1>
    <div class="row">
        @foreach($BlogData as $BlogData)
        <div class="col-md-12 p-2">
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <a href="/{{$BlogData->blog_slug}}">

                            <img class="" style="width:100% !important; height: 100%"
                                src="http://admin.afirahisoft.xyz/uploads/blogs/{{$BlogData->blog_img}}"
                                alt="Card image cap" />
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="/{{$BlogData->blog_slug}}">
                                <h5 class="blog-card-title text-justify mt-2">
                                    {{$BlogData->blog_title}}
                                </h5>
                            </a>
                            <h6 class="blog-card-subtitle text-justify p-0">
                                {{\Illuminate\Support\Str::of($BlogData->blog_des)->limit(500)}}
                            </h6>
                            <h6 class="blog-card-date text-justify">
                                <i class="far fa-clock"></i>
                                {{\Carbon\Carbon::parse($BlogData->created_at )->diffForHumans()}}
                            </h6>
                            <a href="/{{$BlogData->blog_slug}}" class="normal-btn-outline float-left mt-2 mb-4 btn">
                                আরো পড়ুন
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @endforeach

    </div>
</div>