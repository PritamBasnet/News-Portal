<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sundar Haraicha-4 Morang</title>
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    @include('frontend.layout.header')
    @isset($detail)
        <div class="container">
            <div class="row">
                <h1 class="FistRow-Title">{{ $detail->title }}</h1>
            </div>
        </div>
        <div class="container" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
            <div class="row">
                <div class="col-md-8 col-12">
                    <div class="banner-col8">
                        <span class="child-banner">News</span>
                    </div>
                    <div class="row">
                        <img src="{{ asset('backend/image/' . $detail->image) }}" alt="" width="100%">
                        <span class="ParagraphTxt">{{ $detail->description }} </p>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="banner-col4" style="margin: auto;">
                        Trending
                        <span class="stripe"></span>
                    </div>
                    <div class="row" style="margin: 10px 0;">
                        <div class="col-md-6 col-12">
                            <img src="http://127.0.0.1:8000/frontend/image/newsimage6.jpg" alt="" width="100%" height="90px"
                                style="object-fit:cover; object-position:center; padding:5px;">
                        </div>
                        <div class="col-md-6 col-12">
                            <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                        </div>
                    </div>
                    <div class="row" style="margin: 10px 0;">
                        <div class="col-md-6 col-12">
                            <img src="http://127.0.0.1:8000/frontend/image/newsimage1.jpg" alt="" width="100%" height="90px"
                                style="object-fit:cover; object-position:center; padding:5px;">
                        </div>
                        <div class="col-md-6 col-12">
                            <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                        </div>
                    </div>
                    <div class="row" style="margin: 10px 0;">
                        <div class="col-md-6 col-12">
                            <img src="http://127.0.0.1:8000/frontend/image/newsimage4.jpg" alt="" width="100%" height="90px"
                                style="object-fit:cover; object-position:center; padding:5px;">
                        </div>
                        <div class="col-md-6 col-12">
                            <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                        </div>
                    </div>
                    <div class="row" style="margin: 10px 0;">
                        <div class="col-md-6 col-12">
                            <img src="http://127.0.0.1:8000/frontend/image/newsimage6.jpg" alt="" width="100%" height="90px"
                                style="object-fit:cover; object-position:center; padding:5px;">
                        </div>
                        <div class="col-md-6 col-12">
                            <span class="Heading_News">Commitment to complete Nagarkot road by March 29</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endisset
    @include('frontend.layout.footer')
</body>

</html>
