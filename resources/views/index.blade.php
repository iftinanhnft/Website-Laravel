@extends('templates.main')

@section('navbar')
 @include('templates.navbar')
@endsection

@section('content')
<div class="banner-area banner-3">
    <div class="overlay dark-overlay"></div>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                        <div class="banner-content content-padding">
                            <h1 class="banner-title">PenaQu Store Goods Data Collection Website</h1>
                            <br> <br>
                            <a href="/login" class="btn btn-white btn-circled"><i class="bi bi-door-open"></i> lets start</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection