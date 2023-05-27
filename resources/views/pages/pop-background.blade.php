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
                        <!-- Large modal -->
                        <button type="button" class="btn btn-primary mb-2" data-toggle="modal"
                            data-target=".bd-example-modal-lg">View Details</button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header py-0 ps-0">
                                        <div class=" border-start border-primary border-4 py-5 px-4">
                                            <h5 class="modal-title">Request id: <span class="fw-light">GRO8977773</span>
                                            </h5>
                                            <p>Kindly type the group name you are travelling with on the flight</p>
                                            <div class="form-group p-0 col-md-8">
                                                <input type="password" class="form-control ash_bg" placeholder="Group Name">
                                            </div>
                                            <p>We'll never share your details with anyone else</p>
                                        </div>
                                        <button type="button" class="close mt-3 ox_text"
                                            data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body p-0">

                                        <div class="card">
                                            <hr class="bg-secondary m-0">
                                            <div class="px-4 pt-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="card-title fw-bold">Trip Details</h4>
                                                    <a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" viewBox="0 0 36 36">
                                                            <path fill="currentColor"
                                                                d="M28 30H6V8h13.22l2-2H6a2 2 0 0 0-2 2v22a2 2 0 0 0 2 2h22a2 2 0 0 0 2-2V15l-2 2Z"
                                                                class="clr-i-outline clr-i-outline-path-1" />
                                                            <path fill="currentColor"
                                                                d="m33.53 5.84l-3.37-3.37a1.61 1.61 0 0 0-2.28 0L14.17 16.26l-1.11 4.81A1.61 1.61 0 0 0 14.63 23a1.69 1.69 0 0 0 .37 0l4.85-1.07L33.53 8.12a1.61 1.61 0 0 0 0-2.28ZM18.81 20.08l-3.66.81l.85-3.63L26.32 6.87l2.82 2.82ZM30.27 8.56l-2.82-2.82L29 4.16L31.84 7Z"
                                                                class="clr-i-outline clr-i-outline-path-2" />
                                                            <path fill="none" d="M0 0h36v36H0z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="">
                                                    <button class="btn px-3 ox_outline rounded-pill ox_text me-3">One
                                                        way</button>
                                                </div>

                                                <form class="form-valide-with-icon" action="#" method="post">
                                                    <div class="row my-3">
                                                        <div class="col-6 pe-0">
                                                            <div class="form-group">
                                                                <label class="text-label fw-bold">REQUEST
                                                                    ITENARY</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                        <input type="text"
                                                                            class="form-control rounded-0 border-end-0"
                                                                            id="val-username1" name="val-username"
                                                                            placeholder="Lagos-LagosMurtala...">
                                                                        <span
                                                                            class="input-group-text rounded-0 bg-white border border-start-0">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="20" height="20"
                                                                                viewBox="0 0 24 24">
                                                                                <path fill="#790030"
                                                                                    d="M20.949 14.888a1.5 1.5 0 0 1-1.837 1.06L3.445 11.752a1 1 0 0 1-.74-.983l.09-5.403l1.449.388l.915 3.351l5.095 1.366l-.37-8.382l1.933.518l2.81 9.035l5.261 1.41a1.5 1.5 0 0 1 1.061 1.837ZM4 19h16v2H4v-2Z" />
                                                                            </svg>
                                                                        </span>
                                                                        <input type="text"
                                                                            class="form-control border-start-0 rounded-0"
                                                                            id="val-username1" name="val-username"
                                                                            placeholder="Lagos-LagosMurtala...">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 px-0">
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label class="text-label fw-bold">Days of Departure</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control rounded-0"
                                                                        id="val-username1" name="val-username"
                                                                        placeholder="3 day (s)">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <form class="form-valide-with-icon" action="#" method="post">
                                                    <div class="row my-3">
                                                        <div class="col-6 pe-0">
                                                            <div class="form-group">
                                                                <label class="text-label fw-bold">REQUEST
                                                                    DATE</label>
                                                                <div class="input-group border">
                                                                    <div class="input-group-prepend">
                                                                        <input type="text"
                                                                            class="form-control rounded-0 border-0"
                                                                            id="val-username1" name="val-username"
                                                                            value="24-May 2023 04:50 PM"
                                                                            placeholder="Lagos-LagosMurtala...">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 px-0">
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label class="text-label fw-bold">Flexible Date: No</label>
                                                                <div class="basic-dropdown">
                                                                    <div class="dropdown">
                                                                        <button type="button"
                                                                            class="btn rounded-pill btn-sm ox_text dropdown-toggle"
                                                                            data-toggle="dropdown">
                                                                            <span>
                                                                                <span><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="25" height="25"
                                                                                        viewBox="0 0 256 256">
                                                                                        <path fill="#790030"
                                                                                            d="M170 56a6 6 0 0 1 6-6h18V32a6 6 0 0 1 12 0v18h18a6 6 0 0 1 0 12h-18v18a6 6 0 0 1-12 0V62h-18a6 6 0 0 1-6-6Zm58.59 55A101.9 101.9 0 1 1 145 27.41a6 6 0 1 1-2 11.83A91.66 91.66 0 0 0 128 38a89.95 89.95 0 0 0-65.51 151.64a77.53 77.53 0 0 1 40-31.38a46 46 0 1 1 51 0a77.53 77.53 0 0 1 40 31.38A89.65 89.65 0 0 0 218 128a91.76 91.76 0 0 0-1.24-15a6 6 0 1 1 11.83-2ZM128 154a34 34 0 1 0-34-34a34 34 0 0 0 34 34Zm0 64a89.58 89.58 0 0 0 56.56-20a66 66 0 0 0-113.12 0A89.58 89.58 0 0 0 128 218Z" />
                                                                                    </svg>
                                                                                </span>
                                                                            </span>
                                                                            <span>View invited list</span>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="#">Link
                                                                                1</a>
                                                                            <a class="dropdown-item" href="#">Link
                                                                                2</a>
                                                                            <a class="dropdown-item" href="#">Link
                                                                                3</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p><b>RESPONDED BY :</b> <span class="ox_text small_text fw-bold">
                                                                commercialdept@arikair.com</span></p>
                                                        <div class="col-6 pe-0">
                                                            <div class="form-group rounded-0">
                                                                <label class="text-label fw-bold">PREFERRED PICKUP</label>

                                                                <select class="form-control" id="sel1">
                                                                    <option>Lagos-LagosMurtala...</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-5 d-flex justify-content-end">
                                                            <div class="basic-dropdown">
                                                                <div class="dropdown">
                                                                    <button type="button"
                                                                        class="btn rounded-pill btn-sm dropdown-toggle"
                                                                        data-toggle="dropdown">
                                                                        <span>
                                                                            <span><svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="20" height="20"
                                                                                    viewBox="0 0 20 20">
                                                                                    <path fill="currentColor"
                                                                                        d="M5.8 12.2V6H2C.9 6 0 6.9 0 8v6c0 1.1.9 2 2 2h1v3l3-3h5c1.1 0 2-.9 2-2v-1.82a.943.943 0 0 1-.2.021h-7V12.2zM18 1H9c-1.1 0-2 .9-2 2v8h7l3 3v-3h1c1.1 0 2-.899 2-2V3c0-1.1-.9-2-2-2z" />
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                        <span>View Comments</span>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Link
                                                                            1</a>
                                                                        <a class="dropdown-item" href="#">Link
                                                                            2</a>
                                                                        <a class="dropdown-item" href="#">Link
                                                                            3</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <hr class="bg-secondary m-0">
                                            <div class="p-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="card-title fw-bold">Process Request</h4>
                                                    <button class="rounded px-1 border small_text">Input Request</button>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-5">
                                                        <div class="">
                                                            <small class="pb-2">Fare Request</small>
                                                            <p class="ps-3 rounded text-info border">NGN 356,762.00</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 pt-2">

                                                        <div class="form-group">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            value="" checked>Non-Negotiable
                                                                    </label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            value="" checked>Auto send on flight
                                                                        controller approval
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="form-check form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            value="" checked>Apply Discount
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="row">
                                                            <div class=" col-7 justify-content-between">
                                                                <div class="">
                                                                    <small class="pb-2">Adult fare (BF + Tax)</small>
                                                                    <p class="px-3 py-2 rounded ox_text border">NGN
                                                                        356,762.00
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class=" pt-3 col-5">
                                                                <select class="form-control rounded-0 btn-sm"
                                                                    id="sel1">
                                                                    <option><i>10 Passenger</i></option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                </select>
                                                            </div>
                                                            <div class=" col-7 justify-content-between">
                                                                <div class="">
                                                                    <small class="pb-2">Adult fare (BF + Tax)</small>
                                                                    <p class="px-3 py-2 rounded ox_text border">NGN
                                                                        336,732.00
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class=" pt-3 col-5">
                                                                <select class="form-control rounded-0 btn-sm"
                                                                    id="sel1">
                                                                    <option><i>2 Passenger</i></option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class=" py- mb-1 text-center  border">Free Evaluation (BF + Tax)
                                                            Total</p>
                                                        <p class="py-1 mb-1 text-center fw-bold ox_text border">NGN
                                                            336,732.00</p>
                                                        <p class="mb-1 text-center small_text border">Adult fare (BF + Tax)
                                                        </p>
                                                        <p class="py-1 mb-1 text-center fw-bold ox_text border">NGN
                                                            336,732.00</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-center mt-5">
                                                    <div class="d-flex sky_bg rounded-pill">
                                                        <button class="btn ox_bg text-light rounded-pill">Accept</button>
                                                        <button class="btn text-info">Send Review</button>
                                                        <button class="btn ox_bg text-light rounded-pill">Reject</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="m-0">
                                            <hr class="m-0">
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header border-0 pb-0">
                                            <button class="btn text-dark btn-outline-primary">Booked Ticket</button>
                                            <a href="" class="ash_text">Generate Invoice</a>
                                            <a href="" class="ash_text">Upload Tickets</a>
                                            <a href="" class="ash_text">Tab 4</a>
                                            <a href="" class="ash_text fw-bold">Tab 5</a>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-responsive-xl mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="d-flex">Flight Number <span class="ms-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                                    height="15" viewBox="0 0 24 24">
                                                                    <path fill="none" stroke="currentColor"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        d="M3 6h18M6 12h12m-9 6h6" />
                                                                </svg></span>
                                                            </th>
                                                            <th>Departure <span class="ms-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                                    height="15" viewBox="0 0 24 24">
                                                                    <path fill="none" stroke="currentColor"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        d="M3 6h18M6 12h12m-9 6h6" />
                                                                </svg></span>
                                                            </th>
                                                            <th>Arrival <span class="ms-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                                    height="15" viewBox="0 0 24 24">
                                                                    <path fill="none" stroke="currentColor"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        d="M3 6h18M6 12h12m-9 6h6" />
                                                                </svg></span>
                                                            </th>
                                                            <th>Capacity <span class="ms-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                                    height="15" viewBox="0 0 24 24">
                                                                    <path fill="none" stroke="currentColor"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        d="M3 6h18M6 12h12m-9 6h6" />
                                                                </svg></span>
                                                            </th>
                                                            <th>Sold<span class="ms-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                                    height="15" viewBox="0 0 24 24">
                                                                    <path fill="none" stroke="currentColor"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        d="M3 6h18M6 12h12m-9 6h6" />
                                                                </svg></span>
                                                            </th>
                                                            <th>Seat Avail <span class="ms-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                                    height="15" viewBox="0 0 24 24">
                                                                    <path fill="none" stroke="currentColor"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        d="M3 6h18M6 12h12m-9 6h6" />
                                                                </svg></span>
                                                            </th>
                                                            <th>Best fare <span class="ms-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                                    height="15" viewBox="0 0 24 24">
                                                                    <path fill="none" stroke="currentColor"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        d="M3 6h18M6 12h12m-9 6h6" />
                                                                </svg></span>
                                                            </th>
                                                            <th>Disp Fare <span class="ms-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                                    height="15" viewBox="0 0 24 24">
                                                                    <path fill="none" stroke="currentColor"
                                                                        stroke-linecap="round" stroke-width="2"
                                                                        d="M3 6h18M6 12h12m-9 6h6" />
                                                                </svg></span>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Arik 745</td>
                                                            <td><b>12 Aug 2023</b> <br> 12:25 am</td>
                                                            <td><b>12 Aug 2023</b> <br> 12:25 am</td>
                                                            <td>132</td>
                                                            <td>10</td>
                                                            <td>308</td>
                                                            <td>₦ 25,000.00</td>
                                                            <td>₦ 25,000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Arik 545</td>
                                                            <td><b>18 Aug 2023</b> <br> 12:25 am</td>
                                                            <td><b>28 Aug 2023</b> <br> 12:25 am</td>
                                                            <td>132</td>
                                                            <td>110</td>
                                                            <td>138</td>
                                                            <td>₦ 35,000.00</td>
                                                            <td>₦ 34,000.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                    </div>
                                </div>
                            </div>
                        </div>

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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
                                                                                                                                                                                Content body end
                                                                                                                                                                            ***********************************-->


@stop
