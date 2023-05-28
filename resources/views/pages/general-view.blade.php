@extends('layouts.wide')

@section('content')


    <!--**********************************
                                                                                                                                    Content body start
                                                                                                                                ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-9 col-xxl-12">
                    <div class="d-flex my-3 justify-content-between align-items-center">
                        <p class="text-dark fw-bold">Order Summary</p>
                        <button type="button" class="btn rounded-pill btn-primary" data-toggle="modal"
                            data-target="#createNewOder"><span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24">
                                    <path fill="white" d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2Z" />
                                </svg></span> Create a New Offer</button>
                    </div>
                    <div class="row">
                        <div class=" col-lg-4 col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body p-2">
                                    <div class="d-flex  justify-content-around">
                                        <span class="light btn-warning rounded p-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24">
                                                <g fill="none">
                                                    <path stroke="black" stroke-width="1.5"
                                                        d="M3.794 12.03C4.331 9.342 4.6 8 5.487 7.134a4 4 0 0 1 .53-.434C7.04 6 8.41 6 11.15 6h1.703c2.739 0 4.108 0 5.13.7c.19.13.367.276.53.435c.888.865 1.157 2.208 1.694 4.894c.771 3.856 1.157 5.784.269 7.15c-.16.248-.348.477-.56.683C18.75 21 16.785 21 12.853 21H11.15c-3.933 0-5.899 0-7.065-1.138a3.998 3.998 0 0 1-.559-.683c-.888-1.366-.502-3.294.27-7.15Z" />
                                                    <circle cx="15" cy="9" r="1"
                                                        fill="currentColor" />
                                                    <circle cx="9" cy="9" r="1"
                                                        fill="currentColor" />
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="1.5"
                                                        d="M9 6V5a3 3 0 1 1 6 0v1" />
                                                </g>
                                            </svg>
                                        </span>
                                        <div class="dropdown">
                                            <span class=" small_text text-secondary" data-toggle="dropdown">
                                                This Week<svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                    height="20" viewBox="0 0 24 24">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5" d="m7 10l5 5l5-5" />
                                                </svg>
                                            </span>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-5 justify-content-between">
                                        <div>
                                            <p class="small_text text-secondary mb-2">All Request</p>
                                            <p class="fw-bold text-dark mb-2">450</p>
                                        </div>
                                        <div>
                                            <p class="small_text text-secondary mb-2">Pending</p>
                                            <p class="fw-bold text-dark mb-2">50</p>
                                        </div>
                                        <div>
                                            <p class="small_text text-secondary mb-2">Completed</p>
                                            <p class="fw-bold text-dark mb-2">400</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-4 col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body p-2">
                                    <div class="d-flex  justify-content-around">
                                        <span class="light btn-warning rounded p-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24">
                                                <g fill="none">
                                                    <path stroke="black" stroke-width="1.5"
                                                        d="M3.794 12.03C4.331 9.342 4.6 8 5.487 7.134a4 4 0 0 1 .53-.434C7.04 6 8.41 6 11.15 6h1.703c2.739 0 4.108 0 5.13.7c.19.13.367.276.53.435c.888.865 1.157 2.208 1.694 4.894c.771 3.856 1.157 5.784.269 7.15c-.16.248-.348.477-.56.683C18.75 21 16.785 21 12.853 21H11.15c-3.933 0-5.899 0-7.065-1.138a3.998 3.998 0 0 1-.559-.683c-.888-1.366-.502-3.294.27-7.15Z" />
                                                    <circle cx="15" cy="9" r="1"
                                                        fill="currentColor" />
                                                    <circle cx="9" cy="9" r="1"
                                                        fill="currentColor" />
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="1.5"
                                                        d="M9 6V5a3 3 0 1 1 6 0v1" />
                                                </g>
                                            </svg>
                                        </span>
                                        <div class="dropdown">
                                            <span class=" small_text text-secondary" data-toggle="dropdown">
                                                This Week<svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                    height="20" viewBox="0 0 24 24">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5" d="m7 10l5 5l5-5" />
                                                </svg>
                                            </span>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-5 justify-content-between">
                                        <div>
                                            <p class="small_text text-secondary mb-2">Cancelled</p>
                                            <p class="fw-bold text-dark mb-2">30 <small class="text-danger">-20%</small>
                                            </p>
                                        </div>
                                        <div>
                                            <p class="small_text text-secondary mb-2">Returned</p>
                                            <p class="fw-bold text-dark mb-2">20</p>
                                        </div>
                                        <div>
                                            <p class="small_text text-secondary mb-2">Damaged</p>
                                            <p class="fw-bold text-dark mb-2">5</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" col-lg-4 col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body p-2">
                                    <div class="d-flex  justify-content-around">
                                        <span class="light btn-warning rounded p-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24">
                                                <g fill="none" stroke="black" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2">
                                                    <circle cx="8" cy="21" r="1" />
                                                    <circle cx="19" cy="21" r="1" />
                                                    <path
                                                        d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" />
                                                </g>
                                            </svg>
                                        </span>
                                        <div class="dropdown">
                                            <span class=" small_text text-secondary" data-toggle="dropdown">
                                                This Week<svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                    height="20" viewBox="0 0 24 24">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5" d="m7 10l5 5l5-5" />
                                                </svg>
                                            </span>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-5 justify-content-between">
                                        <div>
                                            <p class="small_text text-secondary text-danger mb-2">Discount</p>
                                            <p class="fw-bold text-dark mb-2">20% <small
                                                    class="text-success">+0.00%</small></p>
                                        </div>
                                        <div>
                                            <p class="small_text text-secondary mb-2">Customer</p>
                                            <p class="fw-bold text-dark mb-2">50</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header border-0 pb-0 justify-content-end">
                            <div class="d-flex align-items-center px-1 border border-dark rounded">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M11 2a9 9 0 1 0 5.618 16.032l3.675 3.675a1 1 0 0 0 1.414-1.414l-3.675-3.675A9 9 0 0 0 11 2Zm-6 9a6 6 0 1 1 12 0a6 6 0 0 1-12 0Z"
                                            clip-rule="evenodd" />
                                    </svg> </span>
                                <input type="text" class="form-control input-sm border-0" placeholder="Username">
                            </div>
                            <button class=" bg-white text-dark justify-content-between btn btn-outline-dark d-flex btn-sm">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                        viewBox="0 0 20 20">
                                        <path fill="currentColor"
                                            d="m8.398 14.605l1.323 1.143c.29.251.323.691.075.984a.688.688 0 0 1-.976.075l-1.565-1.352a.7.7 0 0 1-.242-.53V7.938L1.171 1.155C.78.703 1.1 0 1.694 0h16.612c.594 0 .912.704.523 1.155l-5.85 6.784v11.363c0 .386-.31.698-.692.698a.695.695 0 0 1-.692-.698V7.678a.7.7 0 0 1 .17-.458l5.023-5.825H3.21L8.228 7.22a.7.7 0 0 1 .17.458v6.927Z" />
                                    </svg>
                                </span> Filter</button>
                            <button class=" bg-white text-dark justify-content-between btn btn-outline-dark d-flex btn-sm">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                        viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2">
                                            <rect width="18" height="18" x="3" y="4"
                                                rx="2" ry="2" />
                                            <path d="M16 2v4M8 2v4m-5 4h18" />
                                        </g>
                                    </svg>
                                </span> Filter</button>
                            <button
                                class=" btn bg-white text-dark justify-content-between btn-outline-dark d-flex btn-sm"><span><svg
                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 16 16">
                                        <path fill="currentColor"
                                            d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576L6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76l7.494-7.493Z" />
                                    </svg></span> Share</button>

                            <div class="dropdown">
                                <button class="btn bg-white btn-outline-dark btn-sm small_text text-secondary"
                                    data-toggle="dropdown">
                                    Bulk Action<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5" d="m7 10l5 5l5-5" />
                                    </svg>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-xl mb-0">
                                    <thead>
                                        <tr>
                                            <th style="width:20px;">
                                                <div class="custom-control custom-checkbox checkbox-primary check-lg mr-3">
                                                    <input type="checkbox" class="custom-control-input" id="checkAll"
                                                        required="">
                                                    <label class="custom-control-label" for="checkAll"></label>
                                                </div>
                                            </th>
                                            <th class="d-flex">Group Name <span class="ms-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                        viewBox="0 0 24 24">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-width="2" d="M3 6h18M6 12h12m-9 6h6" />
                                                    </svg></span>
                                            </th>
                                            <th>Travel Date<span class="ms-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                        viewBox="0 0 24 24">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-width="2" d="M3 6h18M6 12h12m-9 6h6" />
                                                    </svg></span>
                                            </th>
                                            <th>Travel Type <span class="ms-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                        viewBox="0 0 24 24">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-width="2" d="M3 6h18M6 12h12m-9 6h6" />
                                                    </svg></span>
                                            </th>
                                            <th>Ticket ID <span class="ms-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                        viewBox="0 0 24 24">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-width="2" d="M3 6h18M6 12h12m-9 6h6" />
                                                    </svg></span>
                                            </th>
                                            <th>Offer Details <span class="ms-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                        viewBox="0 0 24 24">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-width="2" d="M3 6h18M6 12h12m-9 6h6" />
                                                    </svg></span>
                                            </th>
                                            <th>Action <span class="ms-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                        viewBox="0 0 24 24">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-width="2" d="M3 6h18M6 12h12m-9 6h6" />
                                                    </svg></span>
                                            </th>
                                            <th>Status <span class="ms-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                        viewBox="0 0 24 24">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-width="2" d="M3 6h18M6 12h12m-9 6h6" />
                                                    </svg></span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width:20px;">
                                                <div class="custom-control custom-checkbox checkbox-primary check-lg mr-3">
                                                    <input type="checkbox" class="custom-control-input" id="checkAll"
                                                        required="">
                                                    <label class="custom-control-label" for="checkAll"></label>
                                                </div>
                                            </td>
                                            <td class="small_text ox_text">Silex Secure (GRO8977773)</td>
                                            <td class="small_text"><b>12 Aug 2023</b> <br> 12:25 am</td>
                                            <td class="small_text"><b>One way</td>
                                            <td class="small_text">9348fjr73</td>
                                            <td class="small_text">25,000.00</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-success small_text light sharp"
                                                        data-toggle="dropdown">
                                                        Completed<svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" viewBox="0 0 24 24">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5" d="m7 10l5 5l5-5" />
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge btn light small_text badge-success">Successful</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:20px;">
                                                <div class="custom-control custom-checkbox checkbox-primary check-lg mr-3">
                                                    <input type="checkbox" class="custom-control-input" id="checkAll"
                                                        required="">
                                                    <label class="custom-control-label" for="checkAll"></label>
                                                </div>
                                            </td>
                                            <td class="small_text ox_text">Silex Secure (GRO8977773)</td>
                                            <td class="small_text"><b>12 Aug 2023</b> <br> 12:25 am</td>
                                            <td class="small_text"><b>One way</td>
                                            <td class="small_text">9348fjr73</td>
                                            <td class="small_text">25,000.00</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-success small_text light sharp"
                                                        data-toggle="dropdown">
                                                        Completed<svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" viewBox="0 0 24 24">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5" d="m7 10l5 5l5-5" />
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge btn light small_text badge-success">Successful</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:20px;">
                                                <div class="custom-control custom-checkbox checkbox-primary check-lg mr-3">
                                                    <input type="checkbox" class="custom-control-input" id="checkAll"
                                                        required="">
                                                    <label class="custom-control-label" for="checkAll"></label>
                                                </div>
                                            </td>
                                            <td class="small_text ox_text">Silex Secure (GRO8977773)</td>
                                            <td class="small_text"><b>12 Aug 2023</b> <br> 12:25 am</td>
                                            <td class="small_text"><b>One way</td>
                                            <td class="small_text">9348fjr73</td>
                                            <td class="small_text">25,000.00</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-warning small_text light sharp"
                                                        data-toggle="dropdown">
                                                        Pending <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" viewBox="0 0 24 24">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5" d="m7 10l5 5l5-5" />
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge btn light small_text badge-warning">pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:20px;">
                                                <div class="custom-control custom-checkbox checkbox-primary check-lg mr-3">
                                                    <input type="checkbox" class="custom-control-input" id="checkAll"
                                                        required="">
                                                    <label class="custom-control-label" for="checkAll"></label>
                                                </div>
                                            </td>
                                            <td class="small_text ox_text">Silex Secure (GRO8977773)</td>
                                            <td class="small_text"><b>12 Aug 2023</b> <br> 12:25 am</td>
                                            <td class="small_text"><b>One way</td>
                                            <td class="small_text">9348fjr73</td>
                                            <td class="small_text">25,000.00</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-warning small_text light sharp"
                                                        data-toggle="dropdown">
                                                        Pending <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" viewBox="0 0 24 24">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5" d="m7 10l5 5l5-5" />
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge btn light small_text badge-warning">pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:20px;">
                                                <div class="custom-control custom-checkbox checkbox-primary check-lg mr-3">
                                                    <input type="checkbox" class="custom-control-input" id="checkAll"
                                                        required="">
                                                    <label class="custom-control-label" for="checkAll"></label>
                                                </div>
                                            </td>
                                            <td class="small_text ox_text">Silex Secure (GRO8977773)</td>
                                            <td class="small_text"><b>12 Aug 2023</b> <br> 12:25 am</td>
                                            <td class="small_text"><b>One way</td>
                                            <td class="small_text">9348fjr73</td>
                                            <td class="small_text">25,000.00</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button"
                                                        class="btn btn-secondary small_text light sharp"
                                                        data-toggle="dropdown">
                                                        In-progress<svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" viewBox="0 0 24 24">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5" d="m7 10l5 5l5-5" />
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge btn light small_text badge-secondary">In-Progress</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:20px;">
                                                <div class="custom-control custom-checkbox checkbox-primary check-lg mr-3">
                                                    <input type="checkbox" class="custom-control-input" id="checkAll"
                                                        required="">
                                                    <label class="custom-control-label" for="checkAll"></label>
                                                </div>
                                            </td>
                                            <td class="small_text ox_text">Silex Secure (GRO8977773)</td>
                                            <td class="small_text"><b>12 Aug 2023</b> <br> 12:25 am</td>
                                            <td class="small_text"><b>One way</td>
                                            <td class="small_text">9348fjr73</td>
                                            <td class="small_text">25,000.00</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-warning small_text light sharp"
                                                        data-toggle="dropdown">
                                                        Pending <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" viewBox="0 0 24 24">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5" d="m7 10l5 5l5-5" />
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge btn light small_text badge-warning">pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:20px;">
                                                <div class="custom-control custom-checkbox checkbox-primary check-lg mr-3">
                                                    <input type="checkbox" class="custom-control-input" id="checkAll"
                                                        required="">
                                                    <label class="custom-control-label" for="checkAll"></label>
                                                </div>
                                            </td>
                                            <td class="small_text ox_text">Silex Secure (GRO8977773)</td>
                                            <td class="small_text"><b>12 Aug 2023</b> <br> 12:25 am</td>
                                            <td class="small_text"><b>One way</td>
                                            <td class="small_text">9348fjr73</td>
                                            <td class="small_text">25,000.00</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button"
                                                        class="btn btn-secondary small_text light sharp"
                                                        data-toggle="dropdown">
                                                        In-progress<svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" viewBox="0 0 24 24">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5" d="m7 10l5 5l5-5" />
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge btn light small_text badge-secondary">In-Progress</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:20px;">
                                                <div class="custom-control custom-checkbox checkbox-primary check-lg mr-3">
                                                    <input type="checkbox" class="custom-control-input" id="checkAll"
                                                        required="">
                                                    <label class="custom-control-label" for="checkAll"></label>
                                                </div>
                                            </td>
                                            <td class="small_text ox_text">Silex Secure (GRO8977773)</td>
                                            <td class="small_text"><b>12 Aug 2023</b> <br> 12:25 am</td>
                                            <td class="small_text"><b>One way</td>
                                            <td class="small_text">9348fjr73</td>
                                            <td class="small_text">25,000.00</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-success small_text light sharp"
                                                        data-toggle="dropdown">
                                                        Completed<svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" viewBox="0 0 24 24">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5" d="m7 10l5 5l5-5" />
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge btn light small_text badge-success">Successful</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:20px;">
                                                <div class="custom-control custom-checkbox checkbox-primary check-lg mr-3">
                                                    <input type="checkbox" class="custom-control-input" id="checkAll"
                                                        required="">
                                                    <label class="custom-control-label" for="checkAll"></label>
                                                </div>
                                            </td>
                                            <td class="small_text ox_text">Silex Secure (GRO8977773)</td>
                                            <td class="small_text"><b>12 Aug 2023</b> <br> 12:25 am</td>
                                            <td class="small_text"><b>One way</td>
                                            <td class="small_text">9348fjr73</td>
                                            <td class="small_text">25,000.00</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button"
                                                        class="btn btn-secondary small_text light sharp"
                                                        data-toggle="dropdown">
                                                        In-progress<svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" viewBox="0 0 24 24">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5" d="m7 10l5 5l5-5" />
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge btn light small_text badge-secondary">In-Progress</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:20px;">
                                                <div class="custom-control custom-checkbox checkbox-primary check-lg mr-3">
                                                    <input type="checkbox" class="custom-control-input" id="checkAll"
                                                        required="">
                                                    <label class="custom-control-label" for="checkAll"></label>
                                                </div>
                                            </td>
                                            <td class="small_text ox_text">Silex Secure (GRO8977773)</td>
                                            <td class="small_text"><b>12 Aug 2023</b> <br> 12:25 am</td>
                                            <td class="small_text"><b>One way</td>
                                            <td class="small_text">9348fjr73</td>
                                            <td class="small_text">25,000.00</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-warning small_text light sharp"
                                                        data-toggle="dropdown">
                                                        Pending <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" viewBox="0 0 24 24">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5" d="m7 10l5 5l5-5" />
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge btn light small_text badge-warning">pending</span>
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


    <!-- Modal for create New Oder Customer -->
    <div class="modal fade" id="createNewOder">
        <div class="modal-dialog modal-dialog-centered medium_modal" role="document">
            <div class="modal-content">
                <div class="modal-header align-items-center">
                    <h5 class="modal-title">Group Payment Request</h5>
                    <button type="button" class="close" data-dismiss="modal"><span
                            class="light px-2 rounded btn-warning ox_text">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex justify-content-between">
                                <p>Order Details</p>
                                <p>New Customer <span><svg xmlns="http://www.w3.org/2000/svg" width="25"
                                            height="25" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M17 8H7c-2.21 0-4 1.79-4 4s1.79 4 4 4h10c2.21 0 4-1.79 4-4s-1.79-4-4-4zM7 15c-1.66 0-3-1.34-3-3s1.34-3 3-3s3 1.34 3 3s-1.34 3-3 3z"
                                                opacity=".3" />
                                            <path fill="currentColor"
                                                d="M17 6H7c-3.31 0-6 2.69-6 6s2.69 6 6 6h10c3.31 0 6-2.69 6-6s-2.69-6-6-6zm0 10H7c-2.21 0-4-1.79-4-4s1.79-4 4-4h10c2.21 0 4 1.79 4 4s-1.79 4-4 4zM7 9c-1.66 0-3 1.34-3 3s1.34 3 3 3s3-1.34 3-3s-1.34-3-3-3z" />
                                        </svg></span></p>
                            </div>
                            <div class="d-flex bg-light rounded align-items-center">
                                <select class=" w-100 " id="inlineFormCustomSelect">
                                    <option selected>Select Customer</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <div class="d-flex bg-light rounded align-items-center">
                                        <select class=" w-100 " id="inlineFormCustomSelect">
                                            <option selected>Payment Type</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex bg-light rounded align-items-center">
                                        <select class=" w-100 " id="inlineFormCustomSelect">
                                            <option selected>Order Type</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <p class="small_text mb-0 mt-2">Order Time & Date</p>
                                <div class="col-6 my-2 w-100">
                                    <input type="date" class="form-control bg-light w-100" placeholder="2017-06-04"
                                        id="mdate">

                                </div>
                                <div class="col-6 my-2 w-100">
                                    <input type="time" class="form-control bg-light w-100" placeholder="2017-06-04"
                                        id="mdate">
                                </div>
                            </div>
                            <p class="small_text mb-0">Order Status</p>
                            <div class="d-flex bg-light rounded align-items-center my-3">
                                <select class=" w-100 " id="inlineFormCustomSelect">
                                    <option selected>Pending</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control bg-light" rows="4" id="comment"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>Items</p>
                            <div>
                                <div class="d-flex align-items-center px-1 border border-dark rounded">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="M11 2a9 9 0 1 0 5.618 16.032l3.675 3.675a1 1 0 0 0 1.414-1.414l-3.675-3.675A9 9 0 0 0 11 2Zm-6 9a6 6 0 1 1 12 0a6 6 0 0 1-12 0Z"
                                                clip-rule="evenodd" />
                                        </svg> </span>
                                    <input type="text" class="form-control input-sm border-0" placeholder="Username">
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item pb-2">
                                        <div class="d-flex">
                                            <div>
                                                <img src="{{ asset('images/iPhone.png') }}" alt="">
                                            </div>
                                            <div class="ps-2 w-100">
                                                <p class="small_text mb-0">SilexSecure</p>
                                                <div class="d-flex justify-content-between">
                                                    <p class="mb-0"><b>₦730,000.00</b></p>
                                                    <small><a href="">add item</a></small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item pb-2">
                                        <div class="d-flex">
                                            <div>
                                                <img src="{{ asset('images/iPhone.png') }}" alt="">
                                            </div>
                                            <div class="ps-2 w-100">
                                                <p class="small_text mb-0">Transcorp</p>
                                                <div class="d-flex justify-content-between">
                                                    <p class="mb-0"><b>₦730,000.00</b></p>
                                                    <small><a href="">add item</a></small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item pb-2">
                                        <div class="d-flex">
                                            <div>
                                                <img src="{{ asset('images/iPhone.png') }}" alt="">
                                            </div>
                                            <div class="ps-2 w-100">
                                                <p class="small_text mb-0">Hilton</p>
                                                <div class="d-flex justify-content-between">
                                                    <p class="mb-0"><b>₦730,000.00</b></p>
                                                    <small><a href="">add item</a></small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item pb-2">
                                        <div class="d-flex">
                                            <div>
                                                <img src="{{ asset('images/iPhone.png') }}" alt="">
                                            </div>
                                            <div class="ps-2 w-100">
                                                <p class="small_text mb-0">Sheraton</p>
                                                <div class="d-flex justify-content-between">
                                                    <p class="mb-0"><b>₦730,000.00</b></p>
                                                    <small><a href="">add item</a></small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item pb-2">
                                        <div class="d-flex">
                                            <div>
                                                <img src="{{ asset('images/iPhone.png') }}" alt="">
                                            </div>
                                            <div class="ps-2 w-100">
                                                <p class="small_text mb-0">Agip</p>
                                                <div class="d-flex justify-content-between">
                                                    <p class="mb-0"><b>₦730,000.00</b></p>
                                                    <small><a href="">add item</a></small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item pb-2">
                                        <div class="d-flex">
                                            <div>
                                                <img src="{{ asset('images/iPhone.png') }}" alt="">
                                            </div>
                                            <div class="ps-2 w-100">
                                                <p class="small_text mb-0">Ministry of Health</p>
                                                <div class="d-flex justify-content-between">
                                                    <p class="mb-0"><b>₦730,000.00</b></p>
                                                    <small><a href="">add item</a></small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item pb-2">
                                        <div class="d-flex">
                                            <div>
                                                <img src="{{ asset('images/iPhone.png') }}" alt="">
                                            </div>
                                            <div class="ps-2 w-100">
                                                <p class="small_text mb-0">BUA Group</p>
                                                <div class="d-flex justify-content-between">
                                                    <p class="mb-0"><b>₦730,000.00</b></p>
                                                    <small><a href="">add item</a></small>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-outline-primary btn-lg">Cancel</button>
                    <button type="button" class="btn btn-primary btn-lg">Create Order</button>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
                                                                                              Content body end
                                                                                         ***********************************-->
@stop
