@extends('layout')

@section('header')
<h1>{{ $color->color }} Color Edit Page</h1>
@endsection

@section('content')

{!! Form::model($color, array('action' => 
array('ColorController@update', $color->id), 
'method' => 'PUT')) !!}

    {!! Form::label('color_lbl', 'Color Name:') !!}
    {!! Form::text('color') !!}
    <br>
    {!! Form::submit('Edit') !!}

{!! Form::close() !!}

@endsection 
