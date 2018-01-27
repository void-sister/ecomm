@extends('layout')

@section('header')
<h1>{{ $size->size }} Size Edit Page</h1>
@endsection

@section('content')

{!! Form::model($size, array('action' => 
    array('SizeController@update', $size->id), 
    'method' => 'PUT')) !!}

    <select  id="category_id" class="drop" name="category_id">
        <option value="0">Select Category</option>
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->category_name}}</option>
        @endforeach
    </select>
    <br>


    {!! Form::label('size_lbl', 'Enter Size:') !!}
    {!! Form::text('size') !!}
    <br>
    {!! Form::submit('Edit') !!}

{!! Form::close() !!}

@endsection 
