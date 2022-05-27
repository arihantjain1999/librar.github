@extends('layouts.app')

@section('content')
<div class="container">
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
</div>
        <div class="container" style="margin-top:50px;">
            <div class="row">
                @foreach ($bookDatas as $bookData)
                <div class="col-md-3 my-2" id='author'>

                    <div class="card-sl">
                        <div class="card-image">
                            <i class="fa fa-book"
                                style="font-size: 35px ; color: #636fa4 ;  font-size : 100px; margin : 10px"></i>
                        </div>

                        <a class="card-action" href="#"><i class="fa fa-heart"></i></a>
                        <div class="card-heading">
                            {{ $bookData->book_name }}
                        </div>
                        <div class="card-text">
                                {{-- {{ $bookData->description }} --}}
                                Audi Q8 is a full-size luxury crossover SUV coupé made by Audi that was launched in 2018.
                        </div>
                        <div class="card-text">
                            {{ $bookData->price }} Rs
                        </div>
                        <a href="#" class="card-button" style="background: #636fa4"> Purchase</a>
                    </div>
                    
                </div>
                @endforeach
            </div>
            <br><br>
            {{-- {{dd($bookData);}} --}}
            <a type="button" class="btn btn-secondary" href=" {{ route('libraries.create') }} ">Add New Book</a>
        </div>

    </div>
@endsection
