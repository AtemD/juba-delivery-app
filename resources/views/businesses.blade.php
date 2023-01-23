@extends('layouts.app')

@section('content')
<div class="page-body mt-0 mb-0">
    <div class="mb-4 rounded-3">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-10 col-md-6 col-lg-4">
                    <h2 class="display-5 fw-bold">Order Food and More.</h2>
                    <p class="fw-semibold">Eats, groceries, medicine, goods and more delivered to your door!</p>
                    <form class="row g-3">
                        <div class="col-12 col-md-8 col-lg-8">
                            <input type="text" class="form-control shadow col-form-label p-3" placeholder="Enter your delivery address">
                        </div>
                        <div class="col-12 col-md-4 col-lg-4">
                            <button type="submit" class="btn btn-dark w-100 mb-3 p-3">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop