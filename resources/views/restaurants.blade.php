@extends('layouts.app')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center justify-content-between">
            <div class="col-6">
                <h2 class="page-title">
                    Search results
                </h2>
                <div class="text-muted mt-1">About 2,410 result (0.19 seconds)</div>
            </div>
            <div class="col-6">
                <h2 class="fw-bolder">Deliver to Juba <a href="#" class="text-muted text-blue text-decoration-underline"><small>change</small></a></h2>
            </div>
        </div>
    </div>
</div>
<br>
<div class="page-body mt-0 mb-0">
    <div class="container-xl">
        <div class="row g-4">
            <div class="col-3 d-none d-lg-block">
                <form action="./" method="get" autocomplete="off" novalidate="">

                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Filter By:</h3>
                            <div class="subheader mb-2">Cuisine Categories</div>
                            <div class="mb-3">
                                <label class="form-check">
                                    <input type="checkbox" class="form-check-input" name="form-tags[]" value="Chicken" checked="">
                                    <span class="form-check-label">Chicken</span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" class="form-check-input" name="form-tags[]" value="Fast food">
                                    <span class="form-check-label">Fast food</span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" class="form-check-input" name="form-tags[]" value="local food">
                                    <span class="form-check-label">local food</span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" class="form-check-input" name="form-tags[]" value="International">
                                    <span class="form-check-label">International</span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" class="form-check-input" name="form-tags[]" value="pizza">
                                    <span class="form-check-label">pizza</span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" class="form-check-input" name="form-tags[]" value="kenyan">
                                    <span class="form-check-label">kenyan</span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" class="form-check-input" name="form-tags[]" value="vegetarian">
                                    <span class="form-check-label">vegetarian</span>
                                </label>
                                <label class="form-check">
                                    <input type="checkbox" class="form-check-input" name="form-tags[]" value="wine">
                                    <span class="form-check-label">wine</span>
                                </label>
                            </div>

                            <div class="subheader mb-2">Business Types</div>
                            <div class="mb-3 btn-list">
                                <a href="#" class="btn">Restaurants<span class="badge bg-blue ms-2">289</span></a>
                                <a href="#" class="btn">Supermarkets <span class="badge bg-blue ms-2">45</span></a>
                                <a href="#" class="btn">Groceries <span class="badge bg-blue ms-2">22</span></a>
                                <a href="#" class="btn">Pharmacies <span class="badge bg-blue ms-2">56</span></a>
                            </div>
                        </div>
                        <!-- Card footer -->
                        <div class="card-footer">
                            <a href="#" class="btn btn-outline-primary w-100">Apply Filters</a>
                            <a href="#" class="btn btn-link w-100">Reset Filters</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-12 col-lg-9">
                <div class="row row-cards">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-sm shadow">
                            <a href="/restaurants/xyz-food-restaurant" class="d-block stretched-link">
                                <img src="./static/photos/photo1.png" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-1">
                                    <h5 class="card-title fw-bolder mb-0">XYZ Food Restaurant</h5>
                                    <span class="badge bg-green">
                                        Now Open
                                    </span>
                                </div>

                                <p class="card-text">
                                    <span class="badge badge-outline text-black">
                                        (4.5)
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                        </svg>
                                        (300)
                                    </span>
                                    <span class="badge badge-outline text-black">
                                        <svg class="icon icon-tabler icon-tabler-soup" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M4 11h16a1 1 0 0 1 1 1v.5c0 1.5 -2.517 5.573 -4 6.5v1a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-1c-1.687 -1.054 -4 -5 -4 -6.5v-.5a1 1 0 0 1 1 -1z"></path>
                                            <path d="M12 4a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2"></path>
                                            <path d="M16 4a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2"></path>
                                            <path d="M8 4a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2"></path>
                                        </svg>
                                        30 - 45 min
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-sm shadow">
                            <a href="#" class="d-block stretched-link">
                                <img src="./static/photos/photo1.png" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-1">
                                    <h5 class="card-title fw-bolder mb-0">XYZ Food Restaurant</h5>
                                    <span class="badge bg-yellow">
                                        Now Busy
                                    </span>
                                </div>

                                <p class="card-text">
                                    <span class="badge badge-outline text-black">
                                        (4.5)
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                        </svg>
                                        (300)
                                    </span>
                                    <span class="badge badge-outline text-black">
                                        <svg class="icon icon-tabler icon-tabler-soup" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M4 11h16a1 1 0 0 1 1 1v.5c0 1.5 -2.517 5.573 -4 6.5v1a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-1c-1.687 -1.054 -4 -5 -4 -6.5v-.5a1 1 0 0 1 1 -1z"></path>
                                            <path d="M12 4a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2"></path>
                                            <path d="M16 4a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2"></path>
                                            <path d="M8 4a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2"></path>
                                        </svg>
                                        30 - 45 min
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-sm shadow">
                            <a href="#" class="d-block stretched-link">
                                <img src="./static/photos/photo1.png" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-1">
                                    <h5 class="card-title fw-bolder mb-0">XYZ Food Restaurant</h5>
                                    <span class="badge bg-danger">
                                        Now Closed
                                    </span>
                                </div>

                                <p class="card-text">
                                    <span class="badge badge-outline text-black">
                                        (4.5)
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                        </svg>
                                        (300)
                                    </span>
                                    <span class="badge badge-outline text-black">
                                        <svg class="icon icon-tabler icon-tabler-soup" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M4 11h16a1 1 0 0 1 1 1v.5c0 1.5 -2.517 5.573 -4 6.5v1a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-1c-1.687 -1.054 -4 -5 -4 -6.5v-.5a1 1 0 0 1 1 -1z"></path>
                                            <path d="M12 4a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2"></path>
                                            <path d="M16 4a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2"></path>
                                            <path d="M8 4a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2"></path>
                                        </svg>
                                        30 - 45 min
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-sm shadow">
                            <a href="#" class="d-block stretched-link">
                                <img src="./static/photos/photo1.png" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-1">
                                    <h5 class="card-title fw-bolder mb-0">XYZ Food Restaurant</h5>
                                    <span class="badge bg-red">
                                        Now Closed
                                    </span>
                                </div>

                                <p class="card-text">
                                    <span class="badge badge-outline text-black">
                                        (4.5)
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                        </svg>
                                        (300)
                                    </span>
                                    <span class="badge badge-outline text-black">
                                        <svg class="icon icon-tabler icon-tabler-soup" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M4 11h16a1 1 0 0 1 1 1v.5c0 1.5 -2.517 5.573 -4 6.5v1a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-1c-1.687 -1.054 -4 -5 -4 -6.5v-.5a1 1 0 0 1 1 -1z"></path>
                                            <path d="M12 4a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2"></path>
                                            <path d="M16 4a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2"></path>
                                            <path d="M8 4a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2"></path>
                                        </svg>
                                        30 - 45 min
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-sm shadow">
                            <a href="#" class="d-block stretched-link">
                                <img src="./static/photos/photo1.png" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-1">
                                    <h5 class="card-title fw-bolder mb-0">XYZ Food Restaurant</h5>
                                    <span class="badge bg-green">
                                        Now Open
                                    </span>
                                </div>

                                <p class="card-text">
                                    <span class="badge badge-outline text-black">
                                        (4.5)
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                        </svg>
                                        (300)
                                    </span>
                                    <span class="badge badge-outline text-black">
                                        <svg class="icon icon-tabler icon-tabler-soup" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M4 11h16a1 1 0 0 1 1 1v.5c0 1.5 -2.517 5.573 -4 6.5v1a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-1c-1.687 -1.054 -4 -5 -4 -6.5v-.5a1 1 0 0 1 1 -1z"></path>
                                            <path d="M12 4a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2"></path>
                                            <path d="M16 4a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2"></path>
                                            <path d="M8 4a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2"></path>
                                        </svg>
                                        30 - 45 min
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-sm shadow">
                            <a href="#" class="d-block stretched-link">
                                <img src="./static/photos/photo1.png" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-1">
                                    <h5 class="card-title fw-bolder mb-0">XYZ Food Restaurant</h5>
                                    <span class="badge bg-green">
                                        Now Open
                                    </span>
                                </div>

                                <p class="card-text">
                                    <span class="badge badge-outline text-black">
                                        (4.5)
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                        </svg>
                                        (300)
                                    </span>
                                    <span class="badge badge-outline text-black">
                                        <svg class="icon icon-tabler icon-tabler-soup" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M4 11h16a1 1 0 0 1 1 1v.5c0 1.5 -2.517 5.573 -4 6.5v1a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-1c-1.687 -1.054 -4 -5 -4 -6.5v-.5a1 1 0 0 1 1 -1z"></path>
                                            <path d="M12 4a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2"></path>
                                            <path d="M16 4a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2"></path>
                                            <path d="M8 4a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2"></path>
                                        </svg>
                                        30 - 45 min
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col-12 d-flex justify-content-end">
                        <ul class="pagination shadow p-2 bg-white">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <polyline points="15 6 9 12 15 18"></polyline>
                                    </svg>
                                    prev
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <polyline points="9 6 15 12 9 18"></polyline>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop