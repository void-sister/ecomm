@extends('layout')

@section('header')
<h1> Size Create Page</h1>
@endsection

@section('content')

{!! Form::open(['action' => 'SizeController@store']) !!}

    {{--  dropdown list of categories  --}}
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
    {!! Form::submit('Submit') !!}

{!! Form::close() !!}

@endsection 
