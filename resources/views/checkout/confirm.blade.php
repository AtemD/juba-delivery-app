@extends('layouts.app')

@section('content')
<div class="page-body mt-0 mb-0">

    <div class="container py-3">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card shadow sticky-top">
                    <div class="card-header d-flex justify-content-between">
                        <h3 class="card-title fs-2">Order Summary</h3>
                        <a href="#" class="text-yellow">Add Item</a>
                    </div>
                    <div class="card-body">

                        <div class="row g-2">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between ">
                                            <h3 class="card-title mb-1">Delivery Location</h3>
                                            <a href="#" class="text-yellow">Edit</a>
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
                                        <div class="d-flex justify-content-between ">
                                            <h3 class="card-title mb-1">Phone Number</h3>
                                            <a href="#" class="text-yellow">Edit</a>
                                        </div>
                                        <div>(+211)979786885</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title mb-1">Select Payment Method</h3>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="radio" name="radios" checked="">
                                                <span class="form-check-label">211 Wallet</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="radio" name="radios">
                                                <span class="form-check-label">MTN-MoMo</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="radio" name="radios">
                                                <span class="form-check-label">M-Gurush</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="radio" name="radios">
                                                <span class="form-check-label">Mastercard</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="radio" name="radios">
                                                <span class="form-check-label">Visa</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="radio" name="radios">
                                                <span class="form-check-label">Pay On Delivery</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between ">
                                            <h3 class="card-title mb-1">Items</h3>
                                            <a href="#" class="text-yellow">Edit</a>
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
                                        <br>
                                        <textarea class="form-control" rows="3">Add additional order instructions...</textarea>

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

                        </div>


                    </div>
                    <div class="card-footer sticky-bottom">
                        <a href="./processing-order" type="button" class="btn btn-md w-100" style="background-color:gold;">Place Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop