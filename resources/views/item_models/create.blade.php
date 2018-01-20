@extends('layout')

@section('header')
<h1> Item Model Create Page</h1>
@endsection

@section('content')

{!! Form::open(['action' => 'ItemModelController@store']) !!}

    {{--  dropdown list of items--}}
    {!! Form::label('sex_lbl', 'Sex:') !!}
    <br>
    {!! Form::label('msex_lbl', 'Male:') !!}
    {!! Form::radio('msex', 'male', true) !!}
    {!! Form::label('fsex_lbl', 'Female:') !!}
    {!! Form::radio('fsex', 'female') !!}
    <br>
    {!! Form::label('model_lbl', 'Model Name:') !!}
    {!! Form::text('model_name') !!}
    <br>
    {!! Form::submit('Submit') !!}

{!! Form::close() !!}

@endsection 
