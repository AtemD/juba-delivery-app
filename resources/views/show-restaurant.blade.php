@extends('layouts.app')

@section('content')
<div class="page-body mt-0 mb-0">

    <div class="container py-3">
        <div class="row bg-white shadow-sm">
            <div class="row">
                <div class="col-lg-12 pt-2">
                    @include('businesses.includes.header')
                </div>
            </div>
            <div class="col-md-6 col-lg-5 text-center pb-2">
                <img src="./static/photos/photo3.png" height="390" width="553" alt="..." class="img-fluid rounded img-thumbnail" style="aspect-ratio: 16/9;">
            </div>
            <div class="col-md-6 col-lg-5">
                @include('businesses.includes.meta-data')
            </div>
        </div>

        <hr class="mt-0">

        <!-- select a Menu section -->
        <div class="row">
            <div class="col-12">
                <div class="input-group">
                    <button type="button" class="btn btn-btn-outline-dark dropdown-toggle shadow" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Select a Menu Section
                    </button>
                    <div class="dropdown-menu" style="">
                        <a class="dropdown-item" href="/restaurants/xyz-food-restaurant/#section1">
                            Section 1
                        </a>
                        <a class="dropdown-item" href="/restaurants/xyz-food-restaurant/#section2">
                            Section 2
                        </a>
                        <a class="dropdown-item" href="/restaurants/xyz-food-restaurant/#section3">
                            Section 3
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-8">
                @include('businesses.includes.section')
            </div>
            <div class="col-md-4 col-lg-4 d-none d-lg-block">
                @include('businesses.includes.cart-at-side')
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-lg-none d-xl-none d-xxl-none">

                <nav class="navbar bg-body-tertiary fixed-bottom">
                    <div class="container">
                        <a href="#" type="button" class="btn btn-dark btn-lg w-100 fs-4" data-bs-toggle="modal" data-bs-target="#modal-scrollable-cart">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="6" cy="19" r="2"></circle>
                                <circle cx="17" cy="19" r="2"></circle>
                                <path d="M17 17h-11v-14h-2"></path>
                                <path d="M6 5l14 1l-1 7h-13"></path>
                            </svg>
                            5
                        </a>
                    </div>
                </nav>

                <div class="modal modal-blur fade" id="modal-scrollable-cart" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Cart Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row g-2">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="row row-0">
                                                <div class="col">
                                                    <div class="card-body p-2">
                                                        <div class="d-flex justify-content-between">
                                                            <h3 class="card-title mb-0">Chiken Wing Soup</h3>
                                                            SSP. 2,500
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-white px-1 pb-1 border-top-0">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="d-flex justify-content-end">
                                                                    <button type="button" class="btn btn-outline-dark me-2 px-3 py-0 fs-3">-</button>
                                                                    <span class="fw-bold px-2">5</span>
                                                                    <button type="button" class="btn btn-outline-dark ms-2 px-3 py-0 fs-3">+</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="card">
                                            <div class="row row-0">
                                                <div class="col">
                                                    <div class="card-body p-2">
                                                        <div class="d-flex justify-content-between">
                                                            <h3 class="card-title mb-0">Chiken Wing Soup</h3>
                                                            SSP. 2,500
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-white px-1 pb-1 border-top-0">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="d-flex justify-content-end">
                                                                    <button type="button" class="btn btn-outline-dark me-2 px-3 py-0 fs-3">-</button>
                                                                    <span class="fw-bold px-2">5</span>
                                                                    <button type="button" class="btn btn-outline-dark ms-2 px-3 py-0 fs-3">+</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="card">
                                            <div class="row row-0">
                                                <div class="col">
                                                    <div class="card-body p-2">
                                                        <div class="d-flex justify-content-between">
                                                            <h3 class="card-title mb-0">Chiken Wing Soup</h3>
                                                            SSP. 2,500
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-white px-1 pb-1 border-top-0">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="d-flex justify-content-end">
                                                                    <button type="button" class="btn btn-outline-dark me-2 px-3 py-0 fs-3">-</button>
                                                                    <span class="fw-bold px-2">5</span>
                                                                    <button type="button" class="btn btn-outline-dark ms-2 px-3 py-0 fs-3">+</button>
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

                            <div class="modal-footer">
                                <button type="button" class="btn me-auto" data-bs-dismiss="modal">Back to Shopping</button>
                                <a href="/checkout/confirm" type="button" class="btn btn-primary">Go to Checkout</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    @stop