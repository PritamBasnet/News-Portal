@extends('backends.layout.master')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Upload </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">New Menu</div>
                        </div>
                        <div class="col-auto" style="z-index: 2;">
                            <i class="fa-solid fa-bars fa-2x text-white-300" style="color: white;"></i>
                        </div>
                    </div>
                    <svg viewBox="0 0 800 500" preserveAspectRatio="none" class="blob"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="100%" id="blobSvg">
                        <g transform="translate(142.87786865234375, 19.72882843017578)">
                            <defs>
                                <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                                    <stop offset="0%" style="stop-color: rgb(0, 147, 233);"></stop>
                                    <stop offset="100%" style="stop-color: rgb(128, 208, 199);"></stop>
                                </linearGradient>
                            </defs>
                            <path class="blob"
                                d="M448,316Q407,382,350,439Q293,496,250,410Q207,324,149,316Q91,308,104,255Q117,202,162,189Q207,176,238,158Q269,140,304,157.5Q339,175,414,212.5Q489,250,448,316Z"
                                fill="url(#gradient)"></path>
                        </g>
                    </svg>
                    {{-- <span class="PlayMagic"></span> --}}
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Upload</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">New Post</div>
                        </div>
                        <div class="col-auto" style="z-index: 2;">
                            <i class="fa-solid fa-face-smile-beam fa-2x text-white-300"
                                style="color:white;"></i>
                        </div>
                    </div>
                    <svg viewBox="0 0 800 500" preserveAspectRatio="none" class="blob"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="100%" id="blobSvg">
                        <g transform="translate(142.87786865234375, 19.72882843017578)">
                            <defs>
                                <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                                    <stop offset="0%" style="stop-color: rgb(0, 147, 233);"></stop>
                                    <stop offset="100%" style="stop-color: rgb(128, 208, 199);"></stop>
                                </linearGradient>
                            </defs>
                            <path class="blob"
                                d="M448,316Q407,382,350,439Q293,496,250,410Q207,324,149,316Q91,308,104,255Q117,202,162,189Q207,176,238,158Q269,140,304,157.5Q339,175,414,212.5Q489,250,448,316Z"
                                fill="url(#gradient)"></path>
                        </g>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">View
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Table</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <svg viewBox="0 0 800 500" preserveAspectRatio="none" class="blob"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
                            <g transform="translate(142.87786865234375, 19.72882843017578)">
                                <defs>
                                    <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                                        <stop offset="0%" style="stop-color: rgb(0, 147, 233);">
                                        </stop>
                                        <stop offset="100%" style="stop-color: rgb(128, 208, 199);">
                                        </stop>
                                    </linearGradient>
                                </defs>
                                <path class="blob"
                                    d="M448,316Q407,382,350,439Q293,496,250,410Q207,324,149,316Q91,308,104,255Q117,202,162,189Q207,176,238,158Q269,140,304,157.5Q339,175,414,212.5Q489,250,448,316Z"
                                    fill="url(#gradient)"></path>
                            </g>
                        </svg>
                        <div class="col-auto" style="z-index: 2;">
                            <i class="fa-solid fa-table-cells fa-2x text-white-300"
                                style="color: white;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
