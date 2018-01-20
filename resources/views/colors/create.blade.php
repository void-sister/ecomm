@extends('layout')

@section('header')
<h1> Color Create Page</h1>
@endsection

@section('content')

{!! Form::open(['action' => 'ColorController@store']) !!}

    {!! Form::label('color_lbl', 'Color Name:') !!}
    {!! Form::text('color') !!}
    <br>
    {!! Form::submit('Submit') !!}

{!! Form::close() !!}

@endsection 