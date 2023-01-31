@extends('layouts.app')

@section('content')
<div class="page-body mt-0 mb-0 d-lg-none">
    <div class="container-xl pt-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-end">
                    @include('businesses.includes.filters-at-top')
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-header d-print-none d-none d-lg-block">
    <div class="container-xl">
        <div class="row g-2 align-items-center justify-content-between">
            <div class="col-6">
                <h2 class="page-title">
                    Search results
                </h2>
                <div class="text-muted mt-1">About 410 result</div>
            </div>
            <div class="col-6">
                <h2 class="fw-bolder">Deliver to Hai Juba <a href="#" class="text-muted text-blue text-decoration-underline"><small>(change)</small></a></h2>
            </div>
        </div>
    </div>
</div>
<br>

<!-- This filter only shows on large devices -->
<div class="page-body mt-0 mb-0">
    <div class="container-xl">
        <div class="row g-4">
            @include('businesses.includes.filters-at-side')
            @include('businesses.includes.restaurants-list')
        </div>
    </div>
</div>

@stop