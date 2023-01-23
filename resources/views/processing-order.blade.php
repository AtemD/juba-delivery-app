@extends('layouts.app')

@section('content')
<div class="page-body mt-0 mb-0">

    <div class="container py-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="alert alert-important alert-success alert-dismissible" role="alert">
                    <div class="d-flex">
                        <div>
                            <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l5 5l10 -10" />
                            </svg>
                        </div>
                        <div>
                            Your order is being confirmed by the restaurant!
                        </div>
                    </div>
                    <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card sticky-top">
                    <div class="card-header d-flex justify-content-between">
                        <h3 class="card-title fs-2">Your Order Details</h3>
                        <h3 class="card-title fs-3">#A9CD74</h3>
                    </div>
                    <div class="card-body">

                        <div class="col-12 pb-2">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <h3 class="card-title mb-1">Items</h3>
                                    </div>
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="fw-bold px-2">x5</span>
                                        <h4 class="mb-0">Chiken Wing Soup</h4>
                                        SSP. 2,500
                                    </div>
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="fw-bold px-2">x5</span>
                                        <h4 class="mb-0">Chiken Wing Soup</h4>
                                        SSP. 2,500
                                    </div>
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="fw-bold px-2">x5</span>
                                        <h4 class="mb-0">Chiken Wing Soup</h4>
                                        SSP. 2,500
                                    </div>

                                    <!-- Order Calculations -->
                                    <div class="hr mb-1"></div>

                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-between">
                                            <p>Subtotal</p>
                                            <p>SSP. 1,500</p>
                                        </div>
                                        <div class="col-12 d-flex justify-content-between">
                                            <p>Packaging</p>
                                            <p>SSP. 1,500</p>
                                        </div>
                                        <div class="col-12 d-flex justify-content-between">
                                            <p>VAT</p>
                                            <p>SSP. 15.00</p>
                                        </div>
                                        <div class="col-12 d-flex justify-content-between">
                                            <p>Delivery fee</p>
                                            <p>SSP. 1,500</p>
                                        </div>

                                        <div class="hr my-1"></div>
                                        <div class="col-12 d-flex justify-content-between">
                                            <p class="fw-bold">Total(Inc. VAT)</p>
                                            <p class="fw-bold">SSP. 4,500</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <h3 class="card-title mb-1">Delivery Location</h3>
                                        </div>
                                        <div>Muniki Block C,</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title mb-1">Delivery Estimate</h3>
                                        <div>20 - 45 min</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <h3 class="card-title mb-1">Phone Number</h3>
                                        </div>
                                        <div>(+211)979786885</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title mb-1">Payment Method</h3>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="radio" name="radios" checked="">
                                                <span class="form-check-label">211 Wallet</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <h3 class="card-title mb-1">Order ID</h3>
                                        </div>
                                        <div>#A9CD74</div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="card-footer sticky-bottom">
                        Thank You
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop