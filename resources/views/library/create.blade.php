@extends('layouts.app')

@section('content')
<div class="container">
  <a type="button" class="btn btn-primary" href=" {{ route('libraries.index') }} ">Back</a>
</div>
    <div class="center">
        {!! Form::open(['method' => 'POST', 'route' => 'libraries.store', 'class' => 'form-horizontal row w-50 ']) !!}
          {{-- </div> --}}
          @include('library.form')
          {!! Form::close() !!}
        </div>
    @endsection