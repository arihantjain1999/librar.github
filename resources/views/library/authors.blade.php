@extends('layouts.app')
@section('content')
<div class="container py-5">
    <a type="button" class="btn btn-outline-primary" href=" {{ route('libraries.index') }} ">Back</a>

    <div class="row text-center text-white">
        <div class="col-lg-8 mx-auto">
            <h1 class="display-4">Team Page</h1>
            <p class="lead mb-0">Using Bootstrap 4 grid and utilities, create a nice team page.</p>
            <p class="lead">Snippet by<a href="https://bootstrapious.com/snippets" class="text-white">
                <u>Bootstrapious</u></a>
            </p>
        </div>
    </div>
</div><!-- End -->


<div class="container">
    <div class="row text-center" >
        @foreach ($bookDatas as $bookData)

        <!-- Team item -->
        <div class="col-xl-3 col-sm-6 mb-5" id='author'>
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-team/teacher-4.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">{{ $bookData->book_name }}</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div><!-- End -->
@endforeach
      
@endsection