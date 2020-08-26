@extends('layouts.app')

@section('content')
    <h1>Create</h1>
    {!! Form::open(['action' => 'ProductsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('code', 'Code')}}
        {{Form::number('code', '', ['class' => 'form-control', 'placeholder' => 'Enter Code'])}}
    </div>
    <div class="form-group">
        {{Form::label('price', 'Price')}}
        {{Form::number('price', '', ['class' => 'form-control', 'placeholder' => 'Enter Price'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection