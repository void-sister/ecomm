@extends('layout')

@section('header')
<h1>{{ $item_model->model_name }} Item Model Edit Page</h1>
@endsection

@section('content')

{!! Form::model($item_model, array('action' => 
    array('ItemModelController@update', $item_model->id), 
    'method' => 'PUT')) !!}

    <select  id="item_id" class="drop" name="item_id">
        <option value="0">Select Item</option>
        @foreach($items as $item)
            <option value="{{$item->id}}">{{$item->item_name}}</option>
        @endforeach
    </select>
    <br>

    {!! Form::label('model_lbl', 'Model Name:') !!}
    {!! Form::text('model_name') !!}
    <br>
    {!! Form::label('sex_lbl', 'Sex:') !!}
    <br>
    {!! Form::label('msex_lbl', 'Male:') !!}
    {!! Form::radio('msex', 'male', true) !!}
    {!! Form::label('fsex_lbl', 'Female:') !!}
    {!! Form::radio('fsex', 'female') !!}
    <br> 
    
    <br>
    {!! Form::submit('Edit') !!}

{!! Form::close() !!}

@endsection 
