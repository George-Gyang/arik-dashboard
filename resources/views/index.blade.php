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
                        <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body d-flex align-items-center justify-content-center">
                                    <div class="row">
                                        <div class="col">
                                            <p class="ox_text fw-bold">CHARTERED SERVICES</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                            <div class="card ox_bg	overflow-hidden">
                                <div class="card-body d-flex align-items-center justify-content-center">
                                    <div class="row">
                                        <div class="col">
                                            <p class="text-light">TRIP PLANNER</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                            <div class="card dark_blue_bg overflow-hidden">
                                <div class="card-body d-flex align-items-center justify-content-center">
                                    <div class="row">
                                        <div class="col">
                                            <p class="text-light">GROUP BOOKING</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body px-4 py-4">
                                    <h5 class="mb-3">1700 / <small class="text-primary">Sales Status</small></h5>
                                    <div class="chart-point">
                                        <div class="check-point-area">
                                            <canvas id="ShareProfit2"></canvas>
                                        </div>
                                        <ul class="chart-point-list">
                                            <li><i class="fa fa-circle text-primary mr-1"></i> 40% Tickets</li>
                                            <li><i class="fa fa-circle text-success mr-1"></i> 35% Events</li>
                                            <li><i class="fa fa-circle text-warning mr-1"></i> 25% Other</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-xxl-4 col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h4 class="card-title">Timeline</h4>
                                </div>
                                <div class="card-body">
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
                                                            class="text-info">#XF-2356.</strong></h6>
                                                    <p class="mb-0">Quisque a consequat ante Sit...</p>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge danger">
                                                </div>
                                                <a class="timeline-panel text-muted" href="#">
                                                    <span>30 minutes ago</span>
                                                    <h6 class="mb-0">john just buy your product <strong
                                                            class="text-warning">Sell $250</strong></h6>
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
                            </div>
                        </div>
                        <div class="col-xl-8 col-xxl-8 col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h4 class="card-title">Recent Payments Queue</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-responsive-sm mb-0">
                                            <thead>
                                                <tr>
                                                    <th style="width:20px;">
                                                        <div
                                                            class="custom-control custom-checkbox checkbox-primary check-lg mr-3">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="checkAll" required="">
                                                            <label class="custom-control-label" for="checkAll"></label>
                                                        </div>
                                                    </th>
                                                    <th><strong>STATUS.</strong></th>
                                                    <th><strong>NAME</strong></th>
                                                    <th><strong>DATE</strong></th>
                                                    <th><strong>STATUS</strong></th>
                                                    <th style="width:85px;"><strong>EDIT</strong></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox check-lg mr-3">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheckBox2" required="">
                                                            <label class="custom-control-label"
                                                                for="customCheckBox2"></label>
                                                        </div>
                                                    </td>
                                                    <td><b>$542</b></td>
                                                    <td>Dr. Jackson</td>
                                                    <td>01 August 2021</td>
                                                    <td class="recent-sats d-flex align-items-center "><i
                                                            class="fa fa-circle text-success mr-1"></i>Successful
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                                class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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
