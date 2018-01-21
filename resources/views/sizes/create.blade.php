@extends('layout')

@section('header')
<h1> Size Create Page</h1>
@endsection

@section('content')

{!! Form::open(['action' => 'SizeController@store']) !!}

    {{--  dropdown list of categories --}}
    {!! Form::select('cat_lbl', 
        ['0' => 'Select Category', 
        '1' => 'Sees Sunlight', 
        '2' => 'Foosball Fanatic', 
        '3' => 'Basement Dweller']) 
    !!}

    {!! Form::label('size_lbl', 'Enter Size:') !!}
    {!! Form::text('size') !!}
    <br>
    {!! Form::submit('Submit') !!}

{!! Form::close() !!}

@endsection 

{{--  echo Form::select('animal', [
    'Cats' => ['leopard' => 'Leopard'],
    'Dogs' => ['spaniel' => 'Spaniel'],
]);

@foreach ($data as $key -> $value)
[
    "$value" => ["$key" => "$value"]
]
@endforeach   --}}