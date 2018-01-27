@extends('layout')

@section('header')
<h1>{{ $category->category_name }} Category Edit Page</h1>
@endsection

@section('content')

{!! Form::model($category, array('action' => 
    array('CategoryController@update', $category->id), 
    'method' => 'PUT')) !!}

    {!! Form::label('category_lbl', 'Category Name:') !!}
    {!! Form::text('category_name') !!}
    <br>
    {!! Form::submit('Edit') !!}

{!! Form::close() !!}

@endsection 
