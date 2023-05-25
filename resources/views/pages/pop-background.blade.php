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
                                                                <label class="text-label fw-bold">Days of Departure</label>
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
                                                            <div class="form-group">
                                                                <label class="text-label fw-bold">PREFERRED PICKUP</label>
                                                                <div class="input-group border">
                                                                    <div class="input-group-prepend">
                                                                        <input type="text"
                                                                            class="form-control rounded-0 border-0"
                                                                            id="val-username1" name="val-username"
                                                                            value="transcorp Hilton Abuja"
                                                                            placeholder="Lagos-LagosMurtala...">
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
                                                    <h4 class="card-title fw-bold">Passenger Deatails</h4>
                                                    <button class="rounded px-1">Step 3</button>
                                                </div>

                                                <div class="row align-items-center">
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <label for="val-skill">No of guess *</label>
                                                                <select class="form-control ox_outline rounded-0"
                                                                    id="val-skill" name="val-skill">
                                                                    <option value="">Please select</option>
                                                                    <option value="html">HTML</option>
                                                                    <option value="css">CSS</option>
                                                                    <option value="javascript">JavaScript</option>
                                                                    <option value="angular">Angular</option>
                                                                    <option value="angular">React</option>
                                                                    <option value="vuejs">Vue.js</option>
                                                                    <option value="ruby">Ruby</option>
                                                                    <option value="php">PHP</option>
                                                                    <option value="asp">ASP.NET</option>
                                                                    <option value="python">Python</option>
                                                                    <option value="mysql">MySQL</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="text-label">Expected fare</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span
                                                                                class="d-flex align-items-center justify-content-center ox_outline px-1 rounded-0 bg-white border">
                                                                                To
                                                                            </span>
                                                                        </div>
                                                                        <input type="text"
                                                                            class="form-control ox_outline rounded-0"
                                                                            id="val-username1" name="val-username"
                                                                            placeholder="Per Person">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 align-items-center">
                                                        <div class="d-flex justify-content-end">
                                                            <span class="me-3">Invite Users</span>
                                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                                    height="25" viewBox="0 0 256 256">
                                                                    <path fill="#790030"
                                                                        d="M170 56a6 6 0 0 1 6-6h18V32a6 6 0 0 1 12 0v18h18a6 6 0 0 1 0 12h-18v18a6 6 0 0 1-12 0V62h-18a6 6 0 0 1-6-6Zm58.59 55A101.9 101.9 0 1 1 145 27.41a6 6 0 1 1-2 11.83A91.66 91.66 0 0 0 128 38a89.95 89.95 0 0 0-65.51 151.64a77.53 77.53 0 0 1 40-31.38a46 46 0 1 1 51 0a77.53 77.53 0 0 1 40 31.38A89.65 89.65 0 0 0 218 128a91.76 91.76 0 0 0-1.24-15a6 6 0 1 1 11.83-2ZM128 154a34 34 0 1 0-34-34a34 34 0 0 0 34 34Zm0 64a89.58 89.58 0 0 0 56.56-20a66 66 0 0 0-113.12 0A89.58 89.58 0 0 0 128 218Z" />
                                                                </svg></span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label for="val-skill fw-bold"><i><b>Preferred issuing
                                                                    office</b></i></label>
                                                        <select class="form-control rounded-0" id="val-skill"
                                                            name="val-skill">
                                                            <option value="">Please select</option>
                                                            <option value="html">HTML</option>
                                                            <option value="css">CSS</option>
                                                            <option value="javascript">JavaScript</option>
                                                            <option value="angular">Angular</option>
                                                            <option value="angular">React</option>
                                                            <option value="vuejs">Vue.js</option>
                                                            <option value="ruby">Ruby</option>
                                                            <option value="php">PHP</option>
                                                            <option value="asp">ASP.NET</option>
                                                            <option value="python">Python</option>
                                                            <option value="mysql">MySQL</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-5">
                                                        <div class="d-flex align-items-center justify-content-end">
                                                            <input type="password"
                                                                class="form-control rounded-0 small_input"
                                                                id="val-password1" name="val-password"
                                                                placeholder="Fullname">
                                                            <input type="password"
                                                                class="form-control rounded-0 small_input"
                                                                id="val-password1" name="val-password"
                                                                placeholder="Email ID">
                                                            <button class="btn rounded-0 ox_bg text-light">submit</button>
                                                        </div>
                                                        <div class="form-check mt-3 form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="flexSwitchCheckDefault">
                                                            <label class="form-check-label"
                                                                for="flexSwitchCheckDefault">Flexible on dates</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer"> </div>
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
