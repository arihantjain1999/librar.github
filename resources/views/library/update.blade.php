@extends('layouts.app')

@section('content')
    <div class="container">

        <a type="button" class="btn btn-primary" href=" {{ route('libraries.index') }} ">Back</a>

        {!! Form::open($bookData , ['method' => 'POST', 'route' => 'libraries.store', 'class' => 'form-horizontal']) !!}
          {{-- </div> --}}
          @include('library.form')
          {!! Form::close() !!}
        </div>
@endsection