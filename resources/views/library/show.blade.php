@extends('layouts.app')

@section('content')
    <div class="container">
        <a type="button" class="btn btn-outline-primary" href=" {{ route('libraries.index') }} ">Back</a>
        <br>
        <b> Id : </b> 
        {{ $bookData->id }}
        <br>
        <b> book_name : </b> {{ $bookData->book_name }}
        <br>
        <b> author : </b> {{ $bookData->author }}
        <br>
        <b> email : </b> {{ $bookData->email }}
        <br>
        <b> publisher_name : </b> {{ $bookData->publisher_name }}
        <br>
        <b> issue_date : </b> {{ $bookData->issue_date }}
        <br>
        <b> description : </b> {{ $bookData->description }}
        <br>
        <b> phone_number : </b> {{ $bookData->phone_number }}
        <br>
        <b> price : </b> {{ $bookData->price }} Rs
        <br>
        {{-- <a type="button" class="btn btn-primary" href="">Show</a> --}}
        <a type="button" class="btn btn-secondary">Edit</a>
        <form action=" {{ route('libraries.destroy' , $bookData->id) }}"  method="post" style="display: inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
              Delete
            </button>
          </form>
        {{-- <b> Id : </b>   {{$bookData->id}} --}}
    </div>
@endsection
