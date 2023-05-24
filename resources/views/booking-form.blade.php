<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    @include('includes.head')
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center py-5 h-100 align-items-center">
                <div class="col-md-9 my-5">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class=" border-start border-primary border-4 p-4">
                                        <div class="d-flex justify-content-between">
                                            <h4 class="card-title fw-bold">Group Name</h4>
                                            <button class="rounded btn-primary px-1">Step 1</button>
                                        </div>
                                        <p>Kindly type the group name you are travelling with on the flight</p>
                                        <div class="form-group p-0 col-md-8">
                                            <input type="password" class="form-control ash_bg" placeholder="Group Name">
                                        </div>
                                        <p>We'll never share your details with anyone else</p>
                                    </div>
                                    <hr class="bg-secondary m-0">
                                    <div class="px-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <h4 class="card-title fw-bold">Trip Details</h4>
                                            <button class="rounded px-1">Step 2</button>
                                        </div>
                                        <div class="d-flex">
                                            <button class="btn rounded-pill ox_bg text-light me-3">Round Trip</button>
                                            <button class="btn ox_outline rounded-pill ox_text me-3">One way</button>
                                            <div class="basic-dropdown">
                                                <div class="dropdown">
                                                    <button type="button"
                                                        class="btn rounded-pill ox_outline btn-sm ox_text dropdown-toggle"
                                                        data-toggle="dropdown">
                                                        <span>Economy</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Link 1</a>
                                                        <a class="dropdown-item" href="#">Link 2</a>
                                                        <a class="dropdown-item" href="#">Link 3</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <form class="form-valide-with-icon" action="#" method="post">
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label class="text-label ox_text">From *</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span
                                                                    class="input-group-text rounded-0 bg-white border">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="20" height="20"
                                                                        viewBox="0 0 24 24">
                                                                        <path fill="#790030"
                                                                            d="M2.5 19h19v2h-19v-2zm19.57-9.36c-.21-.8-1.04-1.28-1.84-1.06L14.92 10l-6.9-6.43l-1.93.51l4.14 7.17l-4.97 1.33l-1.97-1.54l-1.45.39l2.59 4.49L21 11.49c.81-.23 1.28-1.05 1.07-1.85z" />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control rounded-0"
                                                                id="val-username1" name="val-username"
                                                                placeholder="Lagos-LagosMurtala...">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label class="text-label ox_text">To *</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span
                                                                    class="input-group-text rounded-0 bg-white border">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="20" height="20"
                                                                        viewBox="0 0 24 24">
                                                                        <path fill="#790030"
                                                                            d="M20.949 14.888a1.5 1.5 0 0 1-1.837 1.06L3.445 11.752a1 1 0 0 1-.74-.983l.09-5.403l1.449.388l.915 3.351l5.095 1.366l-.37-8.382l1.933.518l2.81 9.035l5.261 1.41a1.5 1.5 0 0 1 1.061 1.837ZM4 19h16v2H4v-2Z" />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control rounded-0"
                                                                id="val-username1" name="val-username"
                                                                placeholder="Lagos-LagosMurtala...">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label class="text-label ox_text">Date *</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span
                                                                    class="input-group-text rounded-0 bg-white border">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="20" height="20"
                                                                        viewBox="0 0 256 256">
                                                                        <path fill="currentColor"
                                                                            d="M208 32h-24v-8a8 8 0 0 0-16 0v8H88v-8a8 8 0 0 0-16 0v8H48a16 16 0 0 0-16 16v160a16 16 0 0 0 16 16h160a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16Zm-96 152a8 8 0 0 1-16 0v-51.06l-4.42 2.22a8 8 0 0 1-7.16-14.32l16-8A8 8 0 0 1 112 120Zm56-8a8 8 0 0 1 0 16h-32a8 8 0 0 1-6.4-12.8l28.78-38.37a8 8 0 1 0-13.31-8.83a8 8 0 1 1-13.85-8A24 24 0 0 1 176 136a23.76 23.76 0 0 1-4.84 14.45L152 176ZM48 80V48h24v8a8 8 0 0 0 16 0v-8h80v8a8 8 0 0 0 16 0v-8h24v32Z" />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control rounded-0"
                                                                id="val-username1" name="val-username"
                                                                placeholder="Lagos-LagosMurtala...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <hr class="bg-secondary m-0">
                                    <div class="p-4">
                                        <div class="d-flex justify-content-between">
                                            <h4 class="card-title fw-bold">Trip Details</h4>
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
                                                    <input type="password" class="form-control rounded-0 small_input"
                                                        id="val-password1" name="val-password"
                                                        placeholder="Fullname">
                                                    <input type="password" class="form-control rounded-0 small_input"
                                                        id="val-password1" name="val-password"
                                                        placeholder="Email ID">
                                                    <button class="btn rounded-0 ox_bg text-light">submit</button>
                                                </div>
                                                <div class="form-check mt-3 form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                                    <label class="form-check-label" for="flexSwitchCheckDefault">Flexible on dates</label>
                                                  </div>
                                            </div>
                                        </div>

                                    </div>
                                    <hr class="bg-secondary m-0">
                                    <div class="mt-4">
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <button class="btn btn-primary text-light" type="button">Submit</button>
                                          </div>
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
        Scripts
    ***********************************-->
    {{-- Required vendors --}}
    <script src="./vendor/global/global.min.js"></script>
    <script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="./js/deznav-init.js"></script>

</body>

</html>
