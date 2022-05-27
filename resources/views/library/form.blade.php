

        <div class="form-group{{ $errors->has('book_name') ? ' has-error' : '' }}  col-lg-6">
            {!! Form::label('book_name', 'Book Name :    ') !!}
            {!! Form::text('book_name', null, ['class' => 'form-control', 'required' => 'required' , 'placeholder' => 'Book Name']) !!}
            <small class="text-danger">{{ $errors->first('book_name') }}</small>
        </div>
        <br>
        <div class="form-group{{ $errors->has('author_name') ? ' has-error' : '' }}  col-lg-6">
            {!! Form::label('author_name', 'Author Name :    ') !!}
            {!! Form::text('author_name', null, ['class' => 'form-control', 'required' => 'required' , 'placeholder' => 'Author Name']) !!}
            <small class="text-danger">{{ $errors->first('author_name') }}</small>
        </div>
        <br>
        
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}  col-lg-6">
        {!! Form::label('email', 'Email address') !!}
        {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
        <small class="text-danger">{{ $errors->first('email') }}</small>
        </div>
        <br>

        <div class="form-group{{ $errors->has('publisher_name') ? ' has-error' : '' }}  col-lg-6">
        {!! Form::label('publisher_name', 'Publisher Name') !!}
        {!! Form::text('publisher_name', null, ['class' => 'form-control', 'required' => 'required' , 'placeholder' => 'Publisher Name']) !!}
        <small class="text-danger">{{ $errors->first('publisher_name') }}</small>
        </div>
        <br>
        <div class="form-group{{ $errors->has('issue_date') ? ' has-error' : '' }}  col-lg-6">
        {!! Form::label('issue_date', 'Issue date') !!}
        {!! Form::date('issue_date', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('issue_date') }}</small>
        </div>
        {{-- <div class="btn-group pull-right"> --}}
            
            <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}  col-lg-6">
                {!! Form::label('phone_number', 'Phone nuber') !!}
                {!! Form::tel('phone_number', null, ['class' => 'form-control', 'required' => 'required' , 'placeholder' => 'Phone Number']) !!}
                <small class="text-danger">{{ $errors->first('phone_number') }}</small>
            </div>
            <br>
            
            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            {!! Form::label('description', 'Description') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required'  , 'rows' => "3"]) !!}
            <small class="text-danger">{{ $errors->first('description') }}</small>
            </div>  
            <br>
    
    <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}  col-lg-6">
    {!! Form::label('price', 'Book price') !!}
    {!! Form::number('price', null, ['class' => 'form-control', 'required' => 'required' , 'placeholder' => 'Book price In Ruppes ']) !!}
    <small class="text-danger">{{ $errors->first('price') }}</small>
    </div>
   
        <br>
        <div class="col-lg-12 mt-2">
            {!! Form::reset('Reset', ['class' => 'btn btn-warning']) !!}
            {!! Form::submit('Add', ['class' => 'btn btn-success']) !!}
        </div>
      
