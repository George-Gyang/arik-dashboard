@extends('layouts.default')

@section('content')


    <!--**********************************
                                                Content body start
                                            ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-9 col-xxl-12">
                    <div class="row">
                        <div class="col-xl-3 col-xxl-3 col-lg-4 col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body d-flex align-items-center justify-content-around">
                                    {{-- <div class="row">
                                        <div class="col"> --}}
                                    <div class="p-md-3">
                                        <a href="">
                                            <img class="img-fluid" src="{{ asset('images/airplane-ticket.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <p class="text-primary ms-lg-2 mb-0 mt-3 me-5 me-md-0  display-5">17</p>
                                    {{-- </div>
                                    </div> --}}
                                </div>
                                <p class="text-center mt-md-n4">Adhoc Group Request</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-3 col-lg-4 col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body d-flex align-items-center justify-content-around">
                                    {{-- <div class="row">
                                        <div class="col"> --}}
                                    <div class="p-md-3 col-8">
                                        <a href="">
                                            <img class="img-fluid" src="{{ asset('images/trip-planner.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    {{-- </div>
                                    </div> --}}
                                </div>
                                <p class="text-center mt-md-n4">TRIP PLANNER</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-3 col-lg-4 col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body d-flex align-items-center justify-content-around">
                                    {{-- <div class="row">
                                        <div class="col"> --}}
                                    <div class="p-md-3 col-8">
                                        <a href="">
                                            <img class="img-fluid" src="{{ asset('images/charter-booking.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    {{-- </div>
                                    </div> --}}
                                </div>
                                <p class="text-center mt-md-n4">CHARTERED BOOKING</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h4 class="card-title">Timeline</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <div id="DZ_W_TimeLine1" class="widget-timeline dz-scroll style-1"
                                        style="height:250px;">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-badge primary"></div>
                                                <a class="timeline-panel text-muted" href="#">
                                                    <span>10 minutes ago</span>
                                                    <h6 class="mb-0">Youtube, a video-sharing website <strong
                                                            class="text-primary">$500</strong>.</h6>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge info">
                                                </div>
                                                <a class="timeline-panel text-muted" href="#">
                                                    <span>20 minutes ago</span>
                                                    <h6 class="mb-0">New order placed <strong
                                                            class="text-info">#XF-2356.</strong>
                                                    </h6>
                                                    <p class="mb-0">Quisque a consequat ante Sit...</p>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge danger">
                                                </div>
                                                <a class="timeline-panel text-muted" href="#">
                                                    <span>30 minutes ago</span>
                                                    <h6 class="mb-0">john just buy your product <strong
                                                            class="text-warning">Sell
                                                            $250</strong></h6>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge success">
                                                </div>
                                                <a class="timeline-panel text-muted" href="#">
                                                    <span>15 minutes ago</span>
                                                    <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-md-0 mt-5 col-md-7">
                                    
                                    <a class="timeline-panel text-muted" href="#">
                                        {{-- <span>20 minutes ago</span> --}}
                                        <p class="mb-0 small_text">New group order placed from Silex Secure Group<strong
                                                class="text-info">#XF-2356.</strong>
                                        </p>
                                        {{-- <p class="mb-0">Quisque a consequat ante Sit...</p> --}}
                                    </a>
                                    {{-- <p>New group order placed from Silex Secure Group <span class="text-info">XF-2356</span> --}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
                                                Content body end
                                            ***********************************-->


@stop
