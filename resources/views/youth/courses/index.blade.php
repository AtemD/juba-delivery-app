@extends('youth.layouts.app')

@section('title', '| Welcome')

@section('content')
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron jumbotron-fluid pt-5">
    <div class="container container-fluid">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <a href="#" class="text-decoration-none">
                    <div class="card mb-3">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-21x9 card-img-top border border-1" style="background-image: url(./static/yep/microsoft-office.jpg)"></div>
                        <div class="card-body">
                            <!-- Computer skills, Language skills, communication skills, Graphics design, 
                    Job readiness training, Entrepreneurship training, life skills, web design & programming, 
                    Film making|photography|Videography, Professional development workshops -->
                            <h3 class="card-title">Computer Basics</h3>
                            <p class="text-muted">
                                <b>Skills you will gain:</b><small>Microsoft Word, Excel, Power Point, Introduction to Internet...</small>
                            </p>
                            <small><span class="badge badge-outline text-blue">Beginner (3 months)</span></small>
                            
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-3">
                <a href="#" class="text-decoration-none">
                    <div class="card mb-3">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-21x9 card-img-top border border-1" style="background-image: url(./static/yep/graphics-design.jpg)"></div>
                        <div class="card-body">
                            <h3 class="card-title">Graphics Design</h3>
                            <p class="text-muted">
                                <b>Skills you will gain:</b><small> photoshop, Illustrator, Corel Draw, etc ...</small>
                            </p>
                            <small><span class="badge badge-outline text-blue">Beginner-intermediate (3 months)</span></small>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-3">
                <a href="#" class="text-decoration-none">
                    <div class="card mb-3">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-21x9 card-img-top border border-1" style="background-image: url(./static/yep/web-design.webp)"></div>
                        <div class="card-body">
                            <h3 class="card-title">Website Design</h3>
                            <p class="text-muted">
                                <b>Skills you will gain:</b><small> HTML, CSS, JavaScript, Wordpress, Bootstrap5 ...</small>
                            </p>
                            <small><span class="badge badge-outline text-blue">Beginner-intermediate (3 months)</span></small>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-3">
                <a href="#" class="text-decoration-none">
                    <div class="card mb-3">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-21x9 card-img-top border border-1" style="background-image: url(./static/yep/app-development.jpg)"></div>
                        <div class="card-body">
                            <h3 class="card-title">Application Development</h3>
                            <p class="text-muted">
                                <b>Skills you will gain:</b><small> Laravel(PHP), Flutter, Web Design,...</small>
                            </p>
                            <small><span class="badge badge-outline text-blue">Beginner (3 months)</span></small>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-3">
                <a href="#" class="text-decoration-none">
                    <div class="card mb-3">
                        <!-- Photo -->
                        <div class="img-responsive img-responsive-21x9 card-img-top border border-1" style="background-image: url(./static/yep/language-skills-training.jpg)"></div>
                        <div class="card-body">
                            <h3 class="card-title">Language Training</h3>
                            <p class="text-muted">
                                <b>Skills you will gain:</b><small> French, English, Kiswahili ...</small>
                            </p>
                            <small><span class="badge badge-outline text-blue">Beginner (3 months)</span></small>
                        </div>
                    </div>
                </a>
            </div>
        </div>


    </div>
</div>
@endsection