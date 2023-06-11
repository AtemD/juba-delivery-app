@extends('layouts.welcome')

@section('content')
<div class="page-body mt-0 mb-0" style="background-color:gold;">
    <div class="mb-4 rounded-3">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-10 col-md-6 col-lg-4">
                    <h2 class="display-5 fw-bold">Order Food and More.</h2>
                    <p class="fw-semibold">Eats, groceries, medicine, goods and more delivered to your door!</p>
                    <form class="row g-3">
                        <div class="col-12">
                            <select type="text" class="form-select form-control form-control-lg shadow" placeholder="Enter your area" id="select-areas" value="">
                                <option value=""></option>
                                <option value="1">Gudele Block 4</option>
                                <option value="2">Gudele Block 7</option>
                                <option value="3">Thongping</option>
                                <option value="4">University of Juba</option>
                                <option value="5">Jebel</option>
                                <option value="6">Muniki Block C</option>
                                <option value="7">Nakuron Cultural Center</option>
                                <option value="8">Rock City</option>
                                <option value="9">Acacia Village</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <select type="text" class="form-select form-control form-control-lg shadow" placeholder="Select a service" id="select-services" value="">
                                <option value=""></option>
                                <option value="1">Restaurants</option>
                                <option value="2">Supermarkets</option>
                                <option value="3">Groceries</option>
                                <option value="4">Pharmacies</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <select type="text" class="form-select form-control form-control-lg shadow" placeholder="Select a service type" id="select-service-type" value="">
                                <option value=""></option>
                                <option value="1">Delivery</option>
                                <option value="2">Pickup</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark w-100 p-2 mt-1 shadow">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <br><br>
            <div class="row g-2 g-md-3 justify-content-center">
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="card">
                        <div class="card-body text-center py-1">
                            <span class="avatar avatar-xl rounded" style="background-image: url(./static/photos/photo1.png)"></span>
                        </div>
                        <a href="/restaurants" class="card-btn">Restaurants</a>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="card border">
                        <div class="card-body text-center py-1">
                            <span class="avatar avatar-xl rounded" style="background-image: url(./static/photos/photo2.png)"></span>
                        </div>
                        <a href="#" class="card-btn">Supermarkets</a>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="card border">
                        <div class="card-body text-center py-1">
                            <span class="avatar avatar-xl rounded" style="background-image: url(./static/photos/photo3.png)"></span>
                        </div>
                        <a href="#" class="card-btn">Groceries</a>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="card border">
                        <div class="card-body text-center py-1">
                            <span class="avatar avatar-xl rounded" style="background-image: url(./static/photos/photo4.png)"></i>
                        </div>
                        <a href="#" class="card-btn">Pharmacies</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <br><br>

</div>
<div class="page-body bg-white mt-0">
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold">How it Works</h1>
            </div>
        </div>
        <div class="row g-2 g-md-3">
            <div class="col- 12 col-md-4 col-lg-4">
                <div class="card border-0 mb-2">
                    <div class="empty">
                        <div class="empty-img">
                            <img src="./static/icons/icon-map-2.svg" class="rounded-5" height="128" alt="">
                        </div>
                        <p class="empty-title">Enter your delivery address</p>
                        <p class="empty-subtitle text-muted">
                            where you want it delivered
                        </p>
                    </div>
                </div>
            </div>
            <div class="col- 12 col-md-4 col-lg-4">
                <div class="card border-0 mb-2">
                    <div class="empty">
                        <div class="empty-img"><img src="./static/icons/shopping-cart-plus.svg" class="rounded-5" height="128" alt="">
                        </div>
                        <p class="empty-title">Select your desired product</p>
                        <p class="empty-subtitle text-muted">
                            Browse from a list of businesses and products
                        </p>
                    </div>
                </div>
            </div>
            <div class="col- 12 col-md-4 col-lg-4">
                <div class="card border-0 mb-2">
                    <div class="empty">
                        <div class="empty-img"><img src="./static/icons/motorbike.svg" class="rounded-5" height="128" alt="">
                        </div>
                        <p class="empty-title">Receive it at your doorstep</p>
                        <p class="empty-subtitle text-muted">
                            We will deliver your package on time.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pb-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold pb-4">Join Us</h1>
            </div>
        </div>
        gh-pages branch
        <div class="row g-2 g-md-3">
            <div class="col- 12 col-md-4 col-lg-4">
                <div class="card shadow mb-2">
                    <div class="empty">
                        <div class="empty-img"><img src="./static/photos/chef.png" class="rounded-5" height="128" alt="">
                        </div>
                        <p class="empty-title">Become a Partner</p>
                        <p class="empty-subtitle text-muted">
                            Our technology and expertise can help you get more customers and increase your sales
                        </p>
                        <div class="empty-action">
                            <a href="./." class="btn btn-dark btn-pill px-4 py-2 fs-3">
                                Add your business
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col- 12 col-md-4 col-lg-4">
                <div class="card shadow mb-2">
                    <div class="empty">
                        <div class="empty-img"><img src="./static/photos/rider.png" class="rounded-5" height="128" alt="">
                        </div>
                        <p class="empty-title">Become a Rider</p>
                        <p class="empty-subtitle text-muted">
                            Deliver with us, and make money. All our drivers are well vetted.
                        </p>
                        <div class="empty-action">
                            <a href="./." class="btn btn-dark btn-pill px-4 py-2 fs-3">
                                Join as a rider
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col- 12 col-md-4 col-lg-4">
                <div class="card shadow mb-2">
                    <div class="empty">
                        <div class="empty-img"><img src="./static/photos/delivered.png" class="rounded-5" height="128" alt="">
                        </div>
                        <p class="empty-title">Get it delivered</p>
                        <p class="empty-subtitle text-muted">
                            We deliver food and more right to your doorstep, sit back and relax, we will deliver it on time.
                        </p>
                        <div class="empty-action">
                            <a href="./." class="btn btn-dark btn-pill px-4 py-2 fs-3">
                                Sign up, join us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop