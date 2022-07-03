<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <script src="https://kit.fontawesome.com/9491f9c560.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    @include('frontend.layout.header')
    {{-- Let us make an side bar --}}
    <?php
    $menu = App\Models\menu::take(8)->get();
    ?>
    <div class="Area-Bar">
        <span class="stripe stripe1"></span>
        <span class="stripe stripe2"></span>
        <span class="stripe stripe3"></span>
    </div>
    <div id="sideBar">
        <ol class="sideBar-List">
            @isset($menu)
                @foreach ($menu as $data)
                    <li class="sideBar-Item"><a href="{{ route('menu.page', $data->id) }}"
                            class="sideBar-Link">{{ $data->name }}</a></li>
                @endforeach
            @endisset
        </ol>
    </div>
    <?php
    $post = App\Models\post::where('cat_id',$take)->take(1)->get();
    ?>
    <div class="container" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
        {{-- First row --}}
        <div class="row FirstRow">
            @isset($post)
                @foreach ($post as $data)
                    <a href="{{ route('detail.page', $data->slug) }}">
                        <h1 class="FistRow-Title">{{ $data->title }}</h1>
                        <img src="{{ asset('backend/image/'.$data->image) }}" alt="" width="100%">
                        <p class="ParagraphTxt" style="max">{{ $data->description }}</p>
                        <div class="Making-Auto">
                            <button class="MyReadMore">
                                <span class="ReadMore-Text">Read More</span>
                                <span class="ReadMore-Magic"></span>
                            </button>
                        </div>
                    </a>
                @endforeach
            @endisset
        </div>
        {{-- first row end --}}
    </div>
    {{-- Second row Here --}}
    <div class="container" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
        <div class="row second-row">
            <div class="col-md-8 col-12">
                <div class="banner-col8">
                    <span class="child-banner">News</span>
                </div>
                <?php
                $post = App\Models\post::where('cat_id',$take)->skip(1)
                    ->take(1)
                    ->get();
                ?>
                @isset($post)
                    @foreach ($post as $data)
                        <a href="{{ route('detail.page',$data->slug) }}">
                            <div class="row" style="padding-top: 10px;">
                                <div class="col-md-6 col-12">
                                    <img src="{{ asset('backend/image/' . $data->image) }}" alt="" width="100%">
                                </div>
                                <div class="col-md-6 col-12">
                                    <span class="Heading_News">{{ $data->title }}</span>
                                    <p class="ParagraphTxt">{{ $data->description }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endisset
                <div class="row">
                    <div class="col-md-6 col-12">
                        <?php
                        $post = App\Models\post::where('cat_id',$take)->skip(2)
                            ->take(2)
                            ->get();
                        ?>
                        @isset($post)
                            @foreach ($post as $data)
                            <a href="{{ route('detail.page',$data->slug) }}">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <img src="{{ asset('backend/image/' . $data->image) }}" alt="" width="100%">
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <span class="Heading_News">{{ $data->title }}</span>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        @endisset
                    </div>
                    <div class="col-md-6 col-12">
                        <?php
                        $post = App\Models\post::skip(4)
                            ->take(2)
                            ->get();
                        ?>
                        <div class="row">
                            @isset($post)
                                @foreach ($post as $data)
                                <a href="{{ route('detail.page',$data->slug) }}">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <img src="{{ asset('backend/image/' . $data->image) }}" alt="" width="100%">
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <span class="Heading_News">{{ $data->title }}</span>
                                        </div>
                                    </div></a>
                                @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12" style="">
                <div class="banner-col4" style="margin:auto;">
                    Trending
                    <span class="stripe"></span>
                </div>
                {{-- let take  the data from database --}}
                <?php
                $post = App\Models\post::skip(6)
                    ->take(5)
                    ->get();
                ?>
                @isset($post)
                    @foreach ($post as $data)
                        <a href="{{ route('detail.page',$data->slug) }}">
                            <div class="row making_tint" style="margin:10px 0;">
                                <div class="col-md-4 col-12" style="display: grid;place-items:center;"
                                    style="display: grid;place-items:center;">
                                    <img src="{{ asset('backend/image/' . $data->image) }}" alt="" class="Circle-Image">
                                </div>
                                <div class="col-md-8 col-12" style="display: grid;place-items:center;">
                                    <span class="Heading_News">{{ $data->title }}</span>
                                </div>

                            </div>
                        </a>
                    @endforeach
                @endisset
            </div>
        </div>
    </div>
    {{-- End second Row --}}
    {{-- Third Row here --}}
    <div class="container" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="banner-col8">
                    <span class="child-banner">News</span>
                </div>
                <div class="row">
                    <div class="col-md-7 col-12">
                        <img src="{{ asset('frontend/image/newsimage5.jpg') }}" alt="" width="100%"
                            style="height: 220px;object-fit:cover;">
                        <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                        <p class="ParagraphTxt">BEIJING (Xinhua) — President Xi Jinping on Wednesday met with Chief
                            Executive of the Macao Special Administrative Region (SAR) Ho Iat Seng, who is on a duty
                            visit to Beijing. During the meeting, Xi heard </p>
                    </div>
                    <div class="col-md-5 col-12">
                        <div class="row" style="padding: 7px 0;">
                            <div class="col-md-6 col-12">
                                <img src="{{ asset('frontend/image/newsimage.jpg') }}" alt="" width="100%"
                                    height="85px" style="object-fit: cover;">
                            </div>
                            <div class="col-md-6 col-12">
                                <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                            </div>
                        </div>
                        <div class="row" style="padding: 7px 0;">
                            <div class="col-md-6 col-12">
                                <img src="{{ asset('frontend/image/newsimage5.jpg') }}" alt="" width="100%"
                                    height="85px" style="object-fit: cover;">
                            </div>
                            <div class="col-md-6 col-12">
                                <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                            </div>
                        </div>
                        <div class="row" style="padding: 7px 0;">
                            <div class="col-md-6 col-12">
                                <img src="{{ asset('frontend/image/newsimage2.jpg') }}" alt="" width="100%"
                                    height="85px" style="object-fit: cover;">
                            </div>
                            <div class="col-md-6 col-12">
                                <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                            </div>
                        </div>
                        <div class="row" style="padding: 7px 0;">
                            <div class="col-md-6 col-12">
                                <img src="{{ asset('frontend/image/newsimage3.jpg') }}" alt="" width="100%"
                                    height="85px" style="object-fit: cover;">
                            </div>
                            <div class="col-md-6 col-12">
                                <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
            </div>
        </div>
    </div>
    {{-- Third row end --}}
    {{-- Fourth row here --}}
    <div class="container" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="banner-col8">
                    <span class="child-banner">News</span>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <img src="{{ asset('frontend/image/newsimage2.jpg') }}" alt="" width="100%">
                        <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                        <p class="ParagraphTxt">BEIJING (Xinhua) — President Xi Jinping on Wednesday met with Chief
                            Executive of the Macao Special Administrative Region (SAR) Ho Iat Seng, who is on a duty
                            visit to Beijing. During the meeting, Xi heard </p>
                    </div>
                    <div class="col-md-6 col-12">
                        <img src="{{ asset('frontend/image/newsimage1.jpg') }}" alt="" width="100%">
                        <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                        <p class="ParagraphTxt">BEIJING (Xinhua) — President Xi Jinping on Wednesday met with Chief
                            Executive of the Macao Special Administrative Region (SAR) Ho Iat Seng, who is on a duty
                            visit to Beijing. During the meeting, Xi heard </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="banner-col4" style="margin: auto;">
                    Trending
                    <span class="stripe"></span>
                </div>
                <div class="row" style="margin: 10px 0;">
                    <div class="col-md-6 col-12">
                        <img src="{{ asset('frontend/image/newsimage6.jpg') }}" alt="" width="100%" height="90px"
                            style="object-fit:cover; object-position:center; padding:5px;">
                    </div>
                    <div class="col-md-6 col-12">
                        <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                    </div>
                </div>
                <div class="row" style="margin: 10px 0;">
                    <div class="col-md-6 col-12">
                        <img src="{{ asset('frontend/image/newsimage1.jpg') }}" alt="" width="100%" height="90px"
                            style="object-fit:cover; object-position:center; padding:5px;">
                    </div>
                    <div class="col-md-6 col-12">
                        <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                    </div>
                </div>
                <div class="row" style="margin: 10px 0;">
                    <div class="col-md-6 col-12">
                        <img src="{{ asset('frontend/image/newsimage4.jpg') }}" alt="" width="100%" height="90px"
                            style="object-fit:cover; object-position:center; padding:5px;">
                    </div>
                    <div class="col-md-6 col-12">
                        <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                    </div>
                </div>
                <div class="row" style="margin: 10px 0;">
                    <div class="col-md-6 col-12">
                        <img src="{{ asset('frontend/image/newsimage6.jpg') }}" alt="" width="100%" height="90px"
                            style="object-fit:cover; object-position:center; padding:5px;">
                    </div>
                    <div class="col-md-6 col-12">
                        <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Fourth Row End --}}
    <div class="container" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="banner-col8">
                    <span class="child-banner">News</span>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <img src="{{ asset('frontend/image/newsimage4.jpg') }}" alt="" width="100%">
                    </div>
                    <div class="col-md-6 col-12">
                        <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                        <p class="ParagraphTxt">BEIJING (Xinhua) — President Xi Jinping on Wednesday met with Chief
                            Executive of the Macao Special Administrative Region (SAR) Ho Iat Seng, who is on a duty
                            visit to Beijing. During the meeting, Xi heard </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <img src="{{ asset('frontend/image/newsimage2.jpg') }}" alt="" width="100%">
                    </div>
                    <div class="col-md-6 col-12">
                        <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                        <p class="ParagraphTxt">BEIJING (Xinhua) — President Xi Jinping on Wednesday met with Chief
                            Executive of the Macao Special Administrative Region (SAR) Ho Iat Seng, who is on a duty
                            visit to Beijing. During the meeting, Xi heard </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12"></div>
        </div>
    </div>
    {{-- Fourth Row end --}}
    {{-- Fifth row here --}}
    <div class="container" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="Banner-Awsome">
                    <span class="awsome-texxt">
                        <span>Court Of Justice&nbsp;</span>
                        <b class="animatess">></b>
                    </span>
                    <span class="Magic-Banner"></span>
                </div>
                <img src="{{ asset('frontend/image/newsimage1.jpg') }}" alt="" width="100%" height="270px"
                    style="padding: 15px; object-fit:cover;">
                <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                <p class="ParagraphTxt">BEIJING (Xinhua) — President Xi Jinping on Wednesday met with Chief
                    Executive of the Macao Special Administrative Region (SAR) Ho Iat Seng, who is on a duty
                    visit to Beijing. During the meeting, Xi heard </p>
            </div>
            <div class="col-md-6 col-12">
                <div class="Banner-Awsome">
                    <span class="awsome-texxt">
                        <span>Sports</span>
                        <b class="animatess">></b>
                    </span>
                    <span class="Magic-Banner"></span>
                </div>
                <img src="{{ asset('frontend/image/newsimage3.jpg') }}" alt="" width="100%" height="270px"
                    style="padding: 15px; object-fit:cover;">
                <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                <p class="ParagraphTxt">BEIJING (Xinhua) — President Xi Jinping on Wednesday met with Chief
                    Executive of the Macao Special Administrative Region (SAR) Ho Iat Seng, who is on a duty
                    visit to Beijing. During the meeting, Xi heard </p>
            </div>
        </div>
    </div>
    {{-- Fifth row end --}}
    {{-- Sixth row --}}
    <div class="container Tint_container" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
        <div class="row">
            <div class="Banner-Awsome"
                style=" background-color: var(--hover); margin-bottom:10px; border-left:2px solid darcyan;">
                <span class="awsome-texxt">
                    <span>Trending News</span>
                </span>
                <span class="Magic-Banner" style="background-color: magenta;"></span>
            </div>
            <div class="col-md-3 col-12">
                <div class="box_wrapper">
                    <img src="{{ asset('frontend/image/newsimage4.jpg') }}" alt="" width="100%" height="170px"
                        style="object-fit: cover;">
                    <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="box_wrapper">
                    <img src="{{ asset('frontend/image/newsimage4.jpg') }}" alt="" width="100%" height="170px"
                        style="object-fit: cover;">
                    <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="box_wrapper">
                    <img src="{{ asset('frontend/image/newsimage4.jpg') }}" alt="" width="100%" height="170px"
                        style="object-fit: cover;">
                    <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="box_wrapper">
                    <img src="{{ asset('frontend/image/newsimage4.jpg') }}" alt="" width="100%" height="170px"
                        style="object-fit: cover;">
                    <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="box_wrapper">
                    <img src="{{ asset('frontend/image/newsimage4.jpg') }}" alt="" width="100%" height="170px"
                        style="object-fit: cover;">
                    <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="box_wrapper">
                    <img src="{{ asset('frontend/image/newsimage4.jpg') }}" alt="" width="100%" height="170px"
                        style="object-fit: cover;">
                    <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="box_wrapper">
                    <img src="{{ asset('frontend/image/newsimage4.jpg') }}" alt="" width="100%" height="170px"
                        style="object-fit: cover;">
                    <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="box_wrapper">
                    <img src="{{ asset('frontend/image/newsimage4.jpg') }}" alt="" width="100%" height="170px"
                        style="object-fit: cover;">
                    <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                </div>
            </div>
        </div>
    </div>
    {{-- End of the sixth row --}}
    @include('frontend.layout.footer')
    <script src="{{ asset('frontend/logics/app.js') }}"></script>
    {{-- <script>
        const MyReadMore = document.querySelector('.MyReadMore');
        MyReadMore.addEventListener("mouseover", () => {
            alert("Hello Pritam");
        });
    </script> --}}
</body>

</html>
