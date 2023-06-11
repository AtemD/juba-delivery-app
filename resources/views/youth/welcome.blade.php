@extends('youth.layouts.app')

@section('title', '| Welcome')

@section('content')
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron jumbotron-fluid pt-5">
    <div class="container container-fluid">
        <div class="row align-self-center">
            <div class="col-md-7 my-auto">
                <h1 class="display-4 font-weight-dark text-primary"><b>Youth <br>Empowerment<br>Platform</b></h1>
                <h2 class=""><b>An online platform for South Sudanese youth.</b></h2>
                <h3 class="text-muted">Learn practical skills, find mentors, find jobs and connect with like minded people.</h3>
            </div>

            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-12">
                        <a class="card card-link mb-2" href="{{ route('courses.index') }}">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <span class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                            <svg xmlns=http://www.w3.org/2000/svg class="icon icon-tabler icon-tabler-certificate" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M15 15m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                                <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                                <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                                <path d="M6 9l12 0"></path>
                                                <path d="M6 12l3 0"></path>
                                                <path d="M6 15l2 0"></path>
                                            </svg>

                                        </span>

                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium fs-2">Courses & Workshops</div>
                                        <div class="text-muted">Apply to or join 32+ practical courses and workshops</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <a class="card card-link mb-2" href="#">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <span class="bg-dark text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                            <svg xmlns=http://www.w3.org/2000/svg class="icon icon-tabler icon-tabler-briefcase" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"></path>
                                                <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2"></path>
                                                <path d="M12 12l0 .01"></path>
                                                <path d="M3 13a20 20 0 0 0 18 0"></path>
                                            </svg>

                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium fs-2">Jobs & Internships for Youth</div>
                                        <div class="text-muted">Apply for jobs or find internships</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <a class="card card-link mb-2" href="#">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <span class="bg-success text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                            <svg xmlns=http://www.w3.org/2000/svg class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                            </svg>

                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium fs-2">Mentors & Entrepreneurs</div>
                                        <div class="text-muted">Connect and learn about potential mentors from South Sudan</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <a class="card card-link mb-2" href="#">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <span class="bg-yellow text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                            <svg xmlns=http://www.w3.org/2000/svg class="icon icon-tabler icon-tabler-friends" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M7 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                <path d="M5 22v-5l-1 -1v-4a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4l-1 1v5"></path>
                                                <path d="M17 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                <path d="M15 22v-4h-2l2 -6a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1l2 6h-2v4"></path>
                                            </svg>

                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium fs-2">Connect with other Youth</div>
                                        <div class="text-muted">connect, collaborate & learn from each other</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-12">
                        <a class="card card-link mb-2" href="#">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <span class="bg-red text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                                            </svg>

                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium fs-2">News, Events & More</div>
                                        <div class="text-muted">....Do not miss out! Create your account today</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <p><a class="btn w-100 btn-primary" href="#" role="button">Login &raquo;</a></p>
                    </div>
                    <div class="col-md-6">
                        <p><a class="btn w-100 btn-success" href="#" role="button">Create New Account &raquo;</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection