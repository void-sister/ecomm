@extends('layout')

@section('header')
<h1>{{ $item->item_name }} Item Edit Page</h1>
@endsection

@section('content')

{!! Form::model($item, array('action' => 
    array('ItemController@update', $item->id), 
    'method' => 'PUT')) !!}

    {!! Form::label('item_lbl', 'Item Name:') !!}
    {!! Form::text('item_name') !!}
    <br>
    {!! Form::label('price_lbl', 'Item Price ($)') !!}
    {!! Form::number('item_price', '1') !!}
    <br>

    {{--  dropdown list of categories --}}
    <select  id="category_id" class="drop" name="category_id">
        <option value="0">Select Category</option>
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->category_name}}</option>
        @endforeach
    </select>
    <br>
    {!! Form::submit('Edit') !!}

{!! Form::close() !!}

@endsection 
