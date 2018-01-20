@extends('layout')

@section('header')
<h1> Category Create Page</h1>
@endsection

@section('content')

{!! Form::open(['action' => 'CategoryController@store']) !!}

    {!! Form::label('category_lbl', 'Category Name:') !!}
    {!! Form::text('category_name') !!}
    <br>
    {!! Form::submit('Submit') !!}

{!! Form::close() !!}

@endsection 