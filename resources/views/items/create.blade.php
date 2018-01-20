@extends('layout')

@section('header')
<h1> Item Create Page</h1>
@endsection

@section('content')

{!! Form::open(['action' => 'ItemController@store']) !!}

    {{--  dropdown list of categories --}}
    {!! Form::label('item_lbl', 'Item Name:') !!}
    {!! Form::text('item_name') !!}
    <br>
    {!! Form::label('price_lbl', 'Item Price ($)') !!}
    {!! Form::number('item_price', '1') !!}
    <br>
    {!! Form::submit('Submit') !!}

{!! Form::close() !!}

@endsection 

