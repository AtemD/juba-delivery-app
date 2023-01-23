@extends('layouts.app')

@section('content')
<div class="page-body mt-0 mb-0">
    <div class="mb-4 rounded-3">
        <div class="container container-tight py-4">
            <form class="card card-md shadow" action="./" method="get" autocomplete="off" novalidate="">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Create new account</h2>
                    <div class="row mb-3">
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" placeholder="Enter First Name" value="">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="Enter Last Name" value="">
                            </div>
                        </div>

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mobile Number</label>
                        <div class="input-group">
                                <div class="col-4">
                                    <select name="area_code" class="form-select">
                                        <option value="">Area Code</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="20" selected="">SSD_+211</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                </div>

                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <div class="input-group input-group-flat">
                            <input type="password" class="form-control" placeholder="Password" autocomplete="off">
                            <span class="input-group-text">
                                <a href="#" class="link-secondary" data-bs-toggle="tooltip" aria-label="Show password" data-bs-original-title="Show password"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="12" r="2"></circle>
                                        <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"></path>
                                    </svg>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <span class="form-check-label">Yes, I want to receive the newsletter.</span>
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <span class="form-check-label">Agree the <a href="./terms-of-service.html" tabindex="-1">terms and policy</a>.</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn w-100" style="background-color:gold;">Create new account</button>
                    </div>
                </div>
            </form>
            <div class="text-center text-muted mt-3">
                Already have account? <a href="/sign-in" tabindex="-1">Sign in</a>
            </div>
        </div>
    </div>
</div>
@stop